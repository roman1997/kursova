<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="hardpercent">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="summ">Сума інвестованих грошей</label>
                        <input type="text" id="summ" class="form-control" ng-model="P">
                    </div>  
                       <div class="form-group">
                        <label for="t">Термін (у роках)</label>
                        <input type="text" id="t" class="form-control" ng-model="t">
                    </div>
                    <div class="form-group">
                        <label for="invest">Відсотки </label>
                        <input type="text" id="invest" class="form-control" ng-model="i">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Нарощена сума</h3>
                <p>{{S() | number:2}}</p>
                 <h3>Складні відсотки</h3>
                <p>{{I() | number:2}}</p>
                 
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
