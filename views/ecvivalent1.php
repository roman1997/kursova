<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="ecvivalent1">
        <div class="row">
            <div class="col-sm-6">
                <h3>Векселі</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="currentPrice">Сума інвестованих грошей</label>
                        <input type="text" id="currentPrice" class="form-control" ng-model="S">
                    </div>
     
                    <div class="form-group">
                        <label for="year">Кількість років</label>
                        <input type="number" id="year" class="form-control" ng-model="t">
                    </div>


                    <div class="form-group">
                        <label for="interest">Облікова ставка</label>
                        <input type="text" id="srok" class="form-control" ng-model="i">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Кількість днів</h3>
                <p>{{P() |currency : '₴' : 2}}</p>
 

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
