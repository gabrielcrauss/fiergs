<?php echo e($slot); ?>


<?php if($errors->any()): ?>
<div style="background:red; position:absolute">
    
</div>
<?php endif; ?>

<div style='margin: auto;  width: 50%;  padding: 10px;'>

<form action=<?php echo e(route('site.produtos')); ?> method="post">
    <?php echo csrf_field(); ?>
    <input name="nome" value='<?php echo e(old('nome')); ?>' type="text" placeholder="Nome" class="borda-preta">
    <?php if($errors->has('nome')): ?> 
        <font color = 'red'><?php echo e($errors->first('nome')); ?> </font>
    <?php endif; ?>
    <br>
    <input name="valor" value='<?php echo e(old('valor')); ?>' type="text" placeholder="R$ " class="borda-preta">
    <?php if($errors->has('valor')): ?> 
        <font color = 'red'><?php echo e($errors->first('valor')); ?> </font>
    <?php endif; ?>
    <br>
    <select name='id_categoria' class="borda-preta}">
        <option value="">Qual a categoria</option>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->id); ?>" <?php echo e(old('id_categoria') == $categoria->id ? ' selected ' : ''); ?>><?php echo e($categoria->nome); ?></option>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php if($errors->has('id_categoria')): ?> 
        <font color = 'red'><?php echo e($errors->first('id_categoria')); ?> </font>
    <?php endif; ?>
    <br>
    <textarea name="descricao" class="borda-preta"><?php echo e(old('descricao')); ?></textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

</div><?php /**PATH C:\Users\Gabriel\fiergs\resources\views/site/layout/_components/form_produtos.blade.php ENDPATH**/ ?>