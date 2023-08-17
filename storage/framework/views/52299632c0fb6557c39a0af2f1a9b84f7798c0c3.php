
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layoutshow','data' => ['titre' => $film->titre]]); ?>
<?php $component->withName('layoutshow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($film->titre)]); ?>
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
    <div class="show">
        <div class="infos">
            <h1 class="show_titre"><?php echo e($film->titre); ?></h1>
            <p class="date">Date de sortie: <?php echo e($film->date_sortie); ?></p>
            <p class="vote">Vote: <?php echo e($film->vote_moyen); ?>/10</p>
            <p class="nb_vote">Nombre de votes: <?php echo e($film->votes); ?></p>
            <img class="background" src="<?php echo e($film->poster_arriere_plan); ?>" alt="film">
            <a class="retour" href="<?php echo e(route('films.index')); ?>">Retour</a>
        </div>
        <div class="un_film">
            <div><img src="<?php echo e($film->poster); ?>" alt=""></div>
            <p class="synopsis"><?php echo e($film->synopsis); ?></p>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH C:\Users\james\OneDrive - CEGEP de Saint-JEROME\Module 4\Cadriciel web\tp1\cadw_tp1_OGER_james\tp1_films\resources\views/films/show.blade.php ENDPATH**/ ?>