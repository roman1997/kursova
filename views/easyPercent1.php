<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="easyPercent">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="currentPrice">  Сума інвестованих грошей</label>
                        <input type="text" id="currentPrice" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="rateInterest">Відсотки</label>
                        <input type="text" id="rateInterest" class="form-control" ng-model="i">
                    </div>
                    <div class="form-group">
                        <label for="interest"> Термін</label>
                        <input type="text" id="srok" class="form-control" ng-model="t">
                    </div>

                    <!--
            <table class="table" id="yearTable1">
                <tr>
                    <tr class="tg-yw4l" ng-repeat="T0 in getYear() ">{{T0 | date : format : "shortDate"}}</tr>
            </table>
-->
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Сума простих процентів</h3>
                <p>{{I()| currency : '₴' : 2 }}</p>
                
                
                <h3>Нарощена сума процентів</h3>
                <p>{{S2()| currency : '₴' : 2 }}</p>
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
