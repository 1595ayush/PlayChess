<div class="widget">
    <h2>Hello, 
        <?php 
            echo $user_data['first_name']; 
            /*echo '<script type="text/javascript">'; 
            echo "alert('hi')";
            echo "</script>";*/
        ?>!
    </h2>
    <div class="inner">
    	<ul><br>
    		<li>
    			<a style="color: inherit" href="logout.php">Log out</a>
    		</li>
    		<li>
    			<a style="color: inherit" href="changepassword.php">Change password</a>
    		</li>
    	</ul>
    </div>
</div>