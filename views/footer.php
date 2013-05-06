          <br/><hr>
          </div>
        </div>
        <div id="footer">
          <div class="container">
            <?php
            $current_date = date("Y");
            if ($copyright_date == $current_date)
            {
              echo ('<p class="muted credit">&copy; '.$copyright_name.' '.$current_date.'</p>');
            }
            else
            {
              echo ('<p class="muted credit">&copy; '.$copyright_name.' '.$copyright_date.'-'.$current_date.'</p>');
            }
            ?>
          </div>
        </div>
    </body>
</html>
