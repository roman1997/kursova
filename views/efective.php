<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="efective">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="t">Термін (у місяцях])</label>
                        <input type="text" id="t" class="form-control" ng-model="m">
                    </div>
                    <div class="form-group">
                        <label for="invest">Номінальна ставка </label>
                        <input type="text" id="invest" class="form-control" ng-model="j" </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Річна ефективна ставка</h3>
                <p>{{i()*100 | number:2}} %</p>


            </div>

        </div>

    </div>
    <!--end col-sm-9-->

    <!--end col-sm-3-->
</div>
<!--end row-->

</div>
<!--end container-->
