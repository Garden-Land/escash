<?php $__env->startSection('content'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".knob").knob();
        });
    </script>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Статистика</h4>
                        <p class="text-muted page-title-alt">Добро пожаловать в ADMIN-PANEL !</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter"><?php echo e($all_win); ?></b></h3>
                                <p class="text-muted">Выиграли пользователи</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter"><?php echo e($all_box); ?></b></h3>
                                <p class="text-muted">Открыли кейсов</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter"><?php echo e($allOrder); ?></b></h3>
                                <p class="text-muted">Внесли пользователи</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter"><?php echo e($allWithdraw); ?></b></h3>
                                <p class="text-muted">Вывели пользователи</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0 m-b-30">Статистика сегодня</h4>

                            <div class="widget-chart text-center">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round
                                       data-fgColor="#34d3eb" value="<?php echo e($procentZarabotok); ?>" data-skin="tron" data-angleOffset="180"
                                       data-readOnly=true data-thickness=".15"/>
                                <h5 class="text-muted m-t-20">Заработок на сегодня</h5>
                                <h2 class="font-600"><?php echo e($zarabotokToday); ?> р.</h2>
                                <ul class="list-inline m-t-15">
                                    <li>
                                        <h5 class="text-muted m-t-20">За неделю</h5>
                                        <h4 class="m-b-0"><?php echo e($zarabotokWeek); ?> р.</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">За месяц</h5>
                                        <h4 class="m-b-0"><?php echo e($zarabotokMounth); ?> р.</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-box">
                            <a href="/admin/lastOpen" class="pull-right btn btn-default btn-sm waves-effect waves-light">Больше</a>
                            <h4 class="text-dark header-title m-t-0">Последние открытия</h4>
                            <p class="text-muted m-b-30 font-13">
                                Последние 7 кейсов
                            </p>

                            <div class="table-responsive" style="min-height: 300px; max-height: 300px;  overflow:  hidden; ">
                                <table class="table table-actions-bar">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Кейс</th>
                                        <th>Пользователь</th>
                                        <th>Выиграл</th>
                                        <th>Профит</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $live7Open; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $live): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($live->id); ?></td>
                                            <td>Кейс #<?php echo e($live->case->id); ?></td>
                                            <td><a href="/admin/user/<?php echo e($live->user->id); ?>"><?php echo e($live->user->name); ?></a></td>
                                            <td><?php echo e($live->item->sell_price); ?> р.</td>
                                            <td><?php echo e($live->item->sell_price - $live->case->price); ?> р.</td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-lg-4">
                        <div class="card-box">
                            <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">Больше</a>
                            <h4 class="m-t-0 m-b-20 header-title"><b>Последние пополнения</b></h4>
                            <div class="nicescroll mx-box" style="overflow: hidden; outline: none; min-height: 345px; max-height: 345px;" tabindex="5000">
                                <ul class="list-unstyled transaction-list m-r-5">
                                    <?php $__currentLoopData = $last9Order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <i class="ti-download text-success"></i>
                                        <a href="/admin/user/<?php echo e($order->user->id); ?>">
                                            <span class="tran-text"><?php echo e($order->user->name); ?></span>
                                        </a>
                                        <span class="pull-right text-success tran-price">+<?php echo e($order->amount); ?> р.</span>
                                        <span class="pull-right text-muted"><?php echo e($order->updated_at); ?></span>
                                        <span class="clearfix"></span>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- col -->

                    <div class="col-lg-8">
                        <div class="card-box">
                            <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">Больше</a>
                            <h4 class="text-dark header-title m-t-0">Последние запросы на вывод</h4>
                            <p class="text-muted m-b-30 font-13">
                                Последние 7 запросов на вывод
                            </p>

                            <div class="table-responsive">
                                <table class="table table-actions-bar">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Пользователь</th>
                                        <th>Платежка</th>
                                        <th>Сумма</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $live7Withdraw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($withdraw->id); ?></td>
                                        <td><a href="/admin/user/<?php echo e($withdraw->user->id); ?>"><?php echo e($withdraw->user->name); ?></a></td>
                                        <td><?php echo e($withdraw->payway); ?></td>
                                        <td><?php echo e($withdraw->amount); ?></td>
                                        <td>
                                            <a href="/admin/acceptWithdraw/<?php echo e($withdraw->id); ?>" class="table-action-btn">Оплатить</a>
                                            <span> | </span>
                                            <a href="/admin/declineWithdraw/<?php echo e($withdraw->id); ?>" class="table-action-btn">Отказать</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->
        <footer class="footer text-right">
            © 2017. All rights reserved. by ToXaHo.
        </footer>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>