<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="inflacia">
        <div class="row">
            <div class="col-sm-6">
                <h3>Векселі</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="dateInvest">Дата інвестування        </label>
                        <input type="date" id="dateInvest" class="form-control" ng-model="d1">
                    </div>
                    <div class="form-group">
                        <label for="date2">Дата погашення </label>
                        <input type="date" id="date2" class="form-control" ng-model="d2">
                    </div>
                    <div class="form-group">
                        <label for="percent">Проценти</label>
                        <input type="text" id="percent" class="form-control" ng-model="i">
                    </div>  
                       <div class="form-group">
                        <label for="r">Річний темп інфляції</label>
                        <input type="text" id="r" class="form-control" ng-model="r">
                    </div>
                    <div class="form-group">
                        <label for="invest">Сума інвестиції </label>
                        <input type="text" id="invest" class="form-control" ng-model="i">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Кількість днів</h3>
                <p>{{Days() | number:0}}</p>
                <h3>Ставка Брутто</h3>
                <p>{{ir()*100| number :2}} %</p>
                <h3>Сума погашення</h3>
                <p>{{S() | number :1}} грн.</p>
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
