<?php

$level = (int) $this['level'] ?: 3;

$project = $this['project'];

?>
<div class="widget project-collaborations collapsable" id="project-collaborations">
    
    <h<?php echo $level + 1?> class="supertitle">Necesidades no económicas</h<?php echo $level ?>>

    <h<?php echo $level ?> class="title">Se busca</h<?php echo $level ?>>
    
    <ul>
        <?php foreach ($project->supports as $support) : ?>
        
        <li class="support <?php echo htmlspecialchars($support->type) ?>">
            <strong><?php echo htmlspecialchars($support->support) ?></strong>
            <p><?php echo htmlspecialchars($support->description) ?></p>
        </li>
        <?php endforeach ?>
    </ul>
    
    <a class="more" href="/project/<?php echo $project->id; ?>/needs-non">Ver más</a>
    <a class="button green" href="/project/<?php echo $project->id; ?>/messages">Colabora</a>
    
</div>