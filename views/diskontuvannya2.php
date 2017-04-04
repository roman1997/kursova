<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="diskontuvannya2">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="P">Сума інвестованих грошей</label>
                        <input type="text" id="P" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="P">Сума при погашенні</label>
                        <input type="text" id="P" class="form-control" ng-model="S">
                    </div>

                    <div class="form-group">
                        <label for="m1">Термін </label>
                        <input type="text" id="m1" class="form-control" ng-model="n">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Річна ставка</h3>
                <p>{{i() | number:5}} %</p>
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
