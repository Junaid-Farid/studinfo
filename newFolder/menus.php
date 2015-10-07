
<dl class="dropdown">
  <dt id="one-ddheader" onmouseover="ddMenu('one',1)" onmouseout="ddMenu('one',-1)"><li><a href="index.php"> Home</a></li></dt>
  </dl>
<?php 
	if($_SESSION['usertype']=='SSG'){
	?>
	<!--
		<dl class="dropdown">
		  <dt id="two-ddheader" onmouseover="ddMenu('two',1)" onmouseout="ddMenu('two',-1)">Student</dt>
		  <dd id="two-ddcontent" onmouseover="cancelHide('two')" onmouseout="ddMenu('two',-1)">
			<ul>
			  <li><a href="add_student.php" class="underline">Add Student</a></li>
			  <li><a href="student_list.php" class="underline">List of Student</a></li>
			  <li><a href="student_filter.php" class="underline">Student Filter</a></li>
			</ul>
		  </dd>
		</dl>
		<dl class="dropdown">
		  <dt id="three-ddheader" onmouseover="ddMenu('three',1)" onmouseout="ddMenu('three',-1)">Subject</dt>
		  <dd id="three-ddcontent" onmouseover="cancelHide('three')" onmouseout="ddMenu('three',-1)">
			<ul>
			  <li><a href="add_subject.php" class="underline">Add Subject</a></li>
			  <li><a href="subject_list.php" class="underline">List of Subject</a></li>
			 
			
			</ul>
		  </dd>
		</dl>

<dl class="dropdown"> 
  <dt id="four-ddheader" onmouseover="ddMenu('four',1)" onmouseout="ddMenu('four',-1)">Department</dt>
  <dd id="four-ddcontent" onmouseover="cancelHide('four')" onmouseout="ddMenu('four',-1)">
    <ul>
      <li><a href="add_course.php" class="underline">Add Department</a></li>
      <li><a href="dept.php" class="underline">List of Department</a></li>
	
    </ul>
  </dd>
</dl>
-->
<dl class="dropdown">
  <dt id="five-ddheader" onmouseover="ddMenu('five',1)" onmouseout="ddMenu('five',-1)">Activities</dt>
  <dd id="five-ddcontent" onmouseover="cancelHide('five')" onmouseout="ddMenu('five',-1)">
    <ul>
      <li><a href="calendar.php" class="underline">Add Activity</a></li>
      <li><a href="calendar_list.php" class="underline">List of Activities</a></li>
	
    </ul>
  </dd>
</dl>
<?php }elseif($_SESSION['usertype']=='Teacher'){
?>
<dl class="dropdown">
		  <dt id="two-ddheader" onmouseover="ddMenu('two',1)" onmouseout="ddMenu('two',-1)">Student</dt>
		  <dd id="two-ddcontent" onmouseover="cancelHide('two')" onmouseout="ddMenu('two',-1)">
			<ul>
	<!--		  <li><a href="add_student.php" class="underline">Add Student</a></li>
			  <li><a href="student_list.php" class="underline">List of Student</a></li>
		-->	  <li><a href="student_filter.php" class="underline">Student Filter</a></li>
			</ul>
		  </dd>
		</dl>

<?php

?>
<?php }else{
?>
	<dl class="dropdown">
		  <dt id="two-ddheader" onmouseover="ddMenu('two',1)" onmouseout="ddMenu('two',-1)">Student</dt>
		  <dd id="two-ddcontent" onmouseover="cancelHide('two')" onmouseout="ddMenu('two',-1)">
			<ul>
			  <li><a href="add_student.php" class="underline">Add Student</a></li>
			  <li><a href="student_list.php" class="underline">List of Student</a></li>
			  <li><a href="student_filter.php" class="underline">Student Filter and Grades</a></li>
			</ul>
		  </dd>
		</dl>
		<dl class="dropdown">
				  <dt id="three-ddheader" onmouseover="ddMenu('three',1)" onmouseout="ddMenu('three',-1)">Subject</dt>
				  <dd id="three-ddcontent" onmouseover="cancelHide('three')" onmouseout="ddMenu('three',-1)">
					<ul>
					  <li><a href="add_subject.php" class="underline">Add Subject</a></li>
					  <li><a href="subject_list.php" class="underline">List of Subject</a></li>
					 
					
					</ul>
				  </dd>
				</dl>

		<dl class="dropdown"> 
		  <dt id="four-ddheader" onmouseover="ddMenu('four',1)" onmouseout="ddMenu('four',-1)">Department</dt>
		  <dd id="four-ddcontent" onmouseover="cancelHide('four')" onmouseout="ddMenu('four',-1)">
			<ul>
			  <li><a href="add_course.php" class="underline">Add Department</a></li>
			  <li><a href="dept.php" class="underline">List of Department</a></li>
			
			</ul>
		  </dd>
		</dl>
		<dl class="dropdown">
		  <dt id="five-ddheader" onmouseover="ddMenu('five',1)" onmouseout="ddMenu('five',-1)">Activities</dt>
		  <dd id="five-ddcontent" onmouseover="cancelHide('five')" onmouseout="ddMenu('five',-1)">
			<ul>
			  <li><a href="calendar.php" class="underline">Add Activity</a></li>
			  <li><a href="calendar_list.php" class="underline">List of Activities</a></li>
			
			</ul>
		  </dd>
		</dl>


<?php
}?>

	
 <?php 
	if($_SESSION['usertype']=='SSG' || $_SESSION['usertype']=='Teacher' || $_SESSION['usertype']=='Registrar'){
	?>
	<!--<dl class="dropdown">
		  <dt id="six-ddheader" onmouseover="ddMenu('six',1)" onmouseout="ddMenu('six',-1)">Manage User</dt>
		  <dd id="six-ddcontent" onmouseover="cancelHide('six')" onmouseout="ddMenu('six',-1)">
			<ul>
			  <li><a href="create_user.php" class="underline">New user</a></li>
			  <li><a href="#" class="underline">List of user</a></li>
			
			</ul> 
		  </dd>
		</dl>
	-->
	
	<?php
	}else{
	?>
	<dl class="dropdown">
		  <dt id="six-ddheader" onmouseover="ddMenu('six',1)" onmouseout="ddMenu('six',-1)">Manage User</dt>
		  <dd id="six-ddcontent" onmouseover="cancelHide('six')" onmouseout="ddMenu('six',-1)">
			<ul>
			  <li><a href="create_user.php" class="underline">New user</a></li>
			  <li><a href="user_list.php" class="underline">List of user</a></li>
			
			</ul> 
		  </dd>
		</dl>
        <dl class="dropdown">
		  <dt id="seven-ddheader" onmouseover="ddMenu('seven',1)" onmouseout="ddMenu('seven',-1)">Reports</dt>
		  <dd id="seven-ddcontent" onmouseover="cancelHide('seven')" onmouseout="ddMenu('seven',-1)">
			<ul>
			  <li><a href="student_list.php" class="underline">List of Student</a></li>
			  
			
			</ul> 
		  </dd>
		</dl>
<?php }
?>	
