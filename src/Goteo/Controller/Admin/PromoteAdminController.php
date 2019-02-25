<?php
/*
 * This file is part of the Goteo Package.
 *
 * (c) Platoniq y Fundación Goteo <fundacion@goteo.org>
 *
 * For the full copyright and license information, please view the README.md
 * and LICENSE files that was distributed with this source code.
 */

namespace Goteo\Controller\Admin;

use Goteo\Application\Config;
use Goteo\Application\Exception\ModelNotFoundException;
use Goteo\Application\Exception\ModelException;
use Goteo\Application\Message;
use Goteo\Library\Forms\FormModelException;
use Goteo\Library\Text;
use Goteo\Model\Promote;
use Goteo\Model\Project;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Goteo\Library\Check;


class PromoteAdminController extends AbstractAdminController {
	protected static $icon = '<i class="fa fa-2x fa-star"></i>';

	// this modules is part of a specific group
	public static function getGroup() {
		return 'main';
	}

	public static function getRoutes() {
		return [
			new Route(
				'/',
				['_controller' => __CLASS__ . "::listAction"]
			),
			new Route(
				'/delete/{id}',
				['_controller' => __CLASS__ . "::deleteAction"]
			)
		];
	}

	protected function validatePromote($id) {

        if(!$this->user)
            throw new ControllerAccessDeniedException();

        $promote = $id ? Promote::get($id) : new Promote();

        if(!$promote)
            throw new ModelNotFoundException();

        if($this->user->hasPerm('admin-module-promote') ) {
            return $promote;
        }

        throw new ControllerAccessDeniedException(Text::get('admin-promote-not-active-yet'));
    }


	public function listAction(Request $request) {
    	$promoted = Promote::getList(false, Config::get('node')); // This method has to be changed for a new Promote::getList that does paging. Similar to Stories::getList
		$fields = ['id','name','status','active','order','actions'];
		$total = count($promoted);

		return $this->viewResponse('admin/promote/list', [
			'list' => $promoted,
			'fields' => $fields,
			'total' => $total,
			'limit' => 20,
		]);

	}

	public function deleteAction($id, Request $request) {
        $promote = $this->validatePromote($id);

		Check::reorderDecrease($id,'promote', 'id', 'order', ['node' => Config::get('node')]);
		$promote->dbDelete();

        return $this->redirect('/admin/promote');
	}
}