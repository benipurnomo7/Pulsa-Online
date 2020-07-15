<?php


?>
<?php if (isset($pdo)) $pdo = null?>
<?php if (!isset($_GET['__modal'])):?>
		  <?php if (!isset($main_content)):?>
          </div>
          <?php endif;?>
          <div class="footer hidden-print">
            <div class="visible-xs" class="text-center">
                Copyright &copy; 2020, <a href="index.php">MamaPulsa</a>
            </div>
            <div class="hidden-xs">
                <div class="pull-left">
                    Copyright &copy; 2020, <a href="index.php">MamaPulsa</a>
                </div>
                <div class="pull-right">
                    Powered by <a href="https://facebook.com/Engky09/" target="_blank">MamaPulsa</a>
                </div>
            </div>
          </div>
        </div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="margin-bottom margin-top text-center">
                        <img src="assets/ajax-loader.gif" alt="loading"/>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js">
		</script>
		<script src="assets/js/bootstrap.min.js">
		</script>
        <script type="text/javascript">
        /*<![CDATA[*/
        jQuery(function($) {
            $(document.body).on("show.bs.modal", function () {
                $(".modal").removeData("bs.modal");
            });
            $("[data-toggle='tooltip']").tooltip();
        });
        /*]]>*/
        </script>
        <?php echo isset($foot) ? $foot : ''?>
	</body>
</html>
<?php else:?>
</div>
<?php endif?>