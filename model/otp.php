

<div class="modal fade" id="modal-otp">
    <div class="modal-dialog">
        <div class="modal-content modalstyle">
            <div class="modal-header mheaderstyle">
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" id="form-otp">
                    <input type="hidden" id="otp" value="insert">
                    <input type="hidden" id="otp-id">
                    <input type="hidden" id="occ">
                    <input type="hidden" id="omno">
                    <input type="hidden" id="oemail">
                    <div class="row">
                        <div class="col-lg-1 col-md-4 col-sm-4 col-xs-12 hml "  ></div>
                        <div class="col-lg-8 col-md-4 col-sm-8 col-xs-12">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"> <label> OTP Number </label></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control  " placeholder="OTP Number" id="otpnum" required="" >
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                    </div>                     
                    <div class="form-group"> 
                        <div class="col-sm-offset-4 col-sm-9" >
                            <button type="submit" class="btn btn-info">Verify</button>
                        </div>
                    </div>
                </form>				
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>