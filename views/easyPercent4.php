<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="easyPercent4">
        <div class="row">
            <div class="col-sm-6">
                <h3>Прості відсотки</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="currentPrice">  Нарощене значення</label>
                        <input type="text" id="currentPrice" class="form-control" ng-model="S">
                    </div>
                    <div class="form-group">
                        <label for="vklad">Сума інвестованих грошей</label>
                        <input type="text" id="vklad" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="interest"> Кількість місяців</label>
                        <input type="text" id="srok" class="form-control" ng-model="i">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>За який термін вклад {{P}} збільшиться в {{S/P}} рази  при ставці {{i}} % річних</h3>
                <p>{{t()  }}</p>
                 
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
