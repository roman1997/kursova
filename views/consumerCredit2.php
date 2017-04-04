<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="consumerCredit2">
        <div class="row">
            <div class="col-sm-6">
                <h3>Векселі</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="priceT">Вартість товару        </label>
                        <input type="text" id="priceT" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="m">Термін кредиту </label>
                        <input type="number" id="m" class="form-control" ng-model="m">
                    </div>
                    <div class="form-group">
                        <label for="percent">Проценти</label>
                        <input type="text" id="percent" class="form-control" ng-model="i">
                    </div>

                    <div class="form-group">
                        <label for="m">Кількість платежів на рік </label>
                        <input type="text" id="m" class="form-control" ng-model="m">
                    </div>
                    <div class="form-group">
                        <label for="P1">Перший платіж </label>
                        <input type="text" id="P1" class="form-control" ng-model="P1">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Сума разового погашення</h3>
                <p>{{q() | number:0}} грн</p>


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
