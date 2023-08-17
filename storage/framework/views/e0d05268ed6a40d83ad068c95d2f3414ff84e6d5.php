<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav','data' => []]); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_search">
            <div class="infos_search">
                <h1 class="show_titre"><?php echo e($film->titre); ?></h1>
                <p class="date">Date de sortie: <?php echo e($film->date_sortie); ?></p>
                <p class="vote">Vote: <?php echo e($film->vote_moyen); ?>/10</p>
                <p class="nb_vote">Nombre de votes: <?php echo e($film->votes); ?></p>
                <img class="background" src="<?php echo e($film->poster_arriere_plan); ?>" alt="film">
            </div>
            <div class="un_film">
                <div><img src="<?php echo e($film->poster); ?>" alt=""></div>
                <p class="synopsis"><?php echo e($film->synopsis); ?></p>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <footer>
        <a class="retour" href="<?php echo e(route('films.index')); ?>">Retour</a>
    </footer>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\6212221\OneDrive - CEGEP de Saint-JEROME\Module 4\Cadriciel web\tp1\cadw_tp1_OGER_james\tp1_films\resources\views/films/search.blade.php ENDPATH**/ ?>