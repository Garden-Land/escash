<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="wraper container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="card-box">
                            <form class="form-horizontal group-border-dashed" action="/admin/addCasePost" novalidate="">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Название кейса</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Кейс №1" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Стоимость кейса</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" required="" placeholder="20" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Получили с кейса</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" required="" placeholder="0" name="total_given">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Ссылка на изображение</label>
                                    <div class="col-sm-6">
                                        <p class="text-muted m-b-15 font-13">
                                            Изображение должно быть в папке "/assets/uploads/"!
                                        </p>
                                        <input type="text" class="form-control" required="" placeholder="/assets/uploads/50.png" name="img">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Предметы в кейсе</label>
                                    <div class="col-sm-6">
                                        <select class="select2 select2-multiple" multiple="multiple" multiple name="items[]" data-placeholder="Выберите предметы ...">
                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->sell_price); ?> р.</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                        <button type="submit" class="btn btn-primary">
                                            Создать
                                        </button>
                                        <button type="reset" class="btn btn-default m-l-5">
                                            Отмена
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>