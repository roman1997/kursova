<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="inflacia2">
        <div class="row">
            <div class="col-sm-6">
                <h3>Векселі</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="d">Банківська облікова ставка         </label>
                        <input type="text" id="d" class="form-control" ng-model="d">
                    </div>
                    <div class="form-group">
                        <label for="percent">Проценти(інфляція)</label>
                        <input type="text" id="percent" class="form-control" ng-model="r">
                    </div>  
                       <div class="form-group">
                        <label for="days">Вексель , днів</label>
                        <input type="text" id="days" class="form-control" ng-model="days">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Ставка Брутто</h3>
                <p>{{dr()*100 | number :2}} %</p>
                <h3>Дисконт (dr)</h3>
                <p>{{discontR() | number :2}} грн.</p>
                <h3>Дисконт (d)</h3>
                <p>{{discont() | number :2}} грн.</p>
                <h3>Різниця в обліковій ставці</h3>
                <p>{{(dr()-d)*100 | number :2}} %</p>
                <h3>Сума дисконту зміниться на</h3>
                <p>{{discontR()-discont() | number :2}} грн</p>
            </div>
        </div>

    </div>

</div>
<!--end col-sm-9-->

<!--end col-sm-3-->
</div>
<!--end row-->

</div>
<!--end container-->
