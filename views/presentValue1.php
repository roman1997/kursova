<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="presentValue1">
        <div class="row">
            <div class="col-sm-6">
                <h3>Теперішня вартість</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="currentPrice">Нарощена сума</label>
                        <input type="text" id="currentPrice" class="form-control" ng-model="S">
                    </div>
                    <div class="form-group">
                        <label for="rateInterest">Процентна ставка</label>
                        <input type="text" id="rateInterest" class="form-control" ng-model="i">
                    </div>
                    <div class="form-group">
                        <label for="interest"> Термін</label>
                        <input type="text" id="srok" class="form-control" ng-model="t">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Поточна вартість</h3>
                <p>{{P()| currency : '₴' : 2 }}</p>

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
