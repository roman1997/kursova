<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="discont1">
        <div class="row">
            <div class="col-sm-6">
                <h3>Векселі</h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="currentPrice">Вексель</label>
                        <input type="text" id="currentPrice" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="startDate">Початкова  дата</label>
                        <input type="date" id="startDate" class="form-control" ng-model="Ds">
                    </div>
                    <div class="form-group">
                        <label for="endDate">Кінцева  дата</label>
                        <input type="date" id="endDate" class="form-control" ng-model="De">
                    </div>


                    <div class="form-group">
                        <label for="interest">Відсотки</label>
                        <input type="text" id="srok" class="form-control" ng-model="i">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Кількість днів</h3>
                <p>{{Days() | number:0}}</p>

                <h3>Кількість днів в роках (t) =</h3>
                <p>{{t() | number:2 }}</p>
                
                <h3>Повна вартість векселя (S) =</h3>
                <p>{{S() | currency : '₴' : 2}}</p>

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
