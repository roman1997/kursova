<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="vigrash">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="P">Сума інвестованих грошей</label>
                        <input type="text" id="P" class="form-control" ng-model="P">
                    </div>
                    <div class="form-group">
                        <label for="i">Річна ставка</label>
                        <input type="text" id="i" class="form-control" ng-model="i*100">
                    </div>  
                         <div class="form-group">
                        <label for="m1">Річна ставка</label>
                        <input type="text" id="m1" class="form-control" ng-model="m1">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Грошовий виграш</h3>
                <p>{{S() | number:2}} грн.</p>
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
