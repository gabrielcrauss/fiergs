




<?php $__env->startSection('titulo', 'Produto'); ?>

<?php $__env->startSection('conteudo'); ?>


        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1><?php echo e($produto->nome); ?></h1>

                <h3>
                    Valor: R$ <?php echo e($produto->valor); ?>

                    <br>
                    <br>
                    Categoria: <?php echo e($produto->categoria->nome); ?>

                    <br>
                    <br>
                    Descrição: <?php echo e($produto->descricao); ?>

                <h3>

            </div>
            <a href="<?php echo e(route('site.produtos')); ?>" ><h2>Voltar</h2></a>


        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel\fiergs\resources\views/site/produto.blade.php ENDPATH**/ ?>