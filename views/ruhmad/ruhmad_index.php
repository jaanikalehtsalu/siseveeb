<div class="container">
    <h1>Rühmad<small></small></h1>
    <!--<div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Developers</h3>
                    <div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                </div>
                <table class="table table-hover" id="dev-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kilgore</td>
                        <td>Trout</td>
                        <td>kilgore</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bob</td>
                        <td>Loblaw</td>
                        <td>boblahblah</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Holden</td>
                        <td>Caulfield</td>
                        <td>penceyreject</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>-->
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Rühmad</h3>
                    <div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">

							</span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Otsing" />
                </div>
                <table class="table table-hover" id="task-table">
                    <thead>

                    </thead>
                    <tbody>
                    <?$i=0;?>
                    <?foreach ( $ruhmad as $ruhm ):?>
                        <?if($i++ % 4 == 0){echo "<tr>";} /* replace br with tr tags if you want*/ ?>
                        <?if ($ruhm['code'] == $code || !$code): ?>
                            <? $code = $ruhm['code']; ?>
                            <th class="ruhmad"><a href="<?=BASE_URL?>ruhmad/view/<?=$ruhm['ruhmad_id']?>"><?=$ruhm['ruhmad_luhend']?></a></th>
                        <?endif; ?>
                    <?endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>