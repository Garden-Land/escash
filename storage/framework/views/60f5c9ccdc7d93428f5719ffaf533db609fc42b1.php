<?php $__env->startSection('content'); ?>
    <link href="/adminAsset/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/adminAsset/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <script src="/adminAsset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/adminAsset/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/adminAsset/plugins/datatables/jszip.min.js"></script>
    <script src="/adminAsset/plugins/datatables/pdfmake.min.js"></script>
    <script src="/adminAsset/plugins/datatables/vfs_fonts.js"></script>
    <script src="/adminAsset/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/adminAsset/plugins/datatables/buttons.print.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/adminAsset/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.colVis.js"></script>
    <script src="/adminAsset/plugins/datatables/dataTables.fixedColumns.min.js"></script>
    <script src="/adminAsset/pages/datatables.init.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "/adminAsset/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
    </script>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <a href="/admin/addItem" class="pull-right btn btn-default btn-sm waves-effect waves-light">Добавить новый предмет</a>
                            <h4 class="m-t-0 header-title"><b>Предметы</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                Здесь показаны все ваши предметы
                            </p>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Изображение</th>
                                    <th>Стоимость</th>
                                    <th>Шанс</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><img src="<?php echo e($item->img); ?>" width="80" height="80"></td>
                                        <td><?php echo e($item->sell_price); ?> р.</td>
                                        <td><?php echo e($item->chance); ?>%</td>
                                        <td>
                                            <a href="/admin/item/<?php echo e($item->id); ?>" class="table-action-btn">
                                                Редактировать <i class="md md-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>