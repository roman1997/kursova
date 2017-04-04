<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="diskontuvannya1">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="P">Сума інвестованих грошей</label>
                        <input type="text" id="P" class="form-control" ng-model="S">
                    </div>
                    <div class="form-group">
                        <label for="ic">Термін</label>
                        <input type="text" id="ic" class="form-control" ng-model="n">
                    </div>
                    <div class="form-group">
                        <label for="n">Обліков ставка</label>
                        <input type="text" id="n" class="form-control" ng-model="dc">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Сума дисконту</h3>
                <p>{{D() | number:2}} грн.</p>
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
