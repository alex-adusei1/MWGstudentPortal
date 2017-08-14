<div class="sidebar" data-background-color="brown" data-active-color="danger">
<!--
Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->
<div class="logo">
	<a href="#" class="simple-text logo-mini">
		MWG
	</a>

	<a href="#" class="simple-text logo-normal">
		MWG Academy
	</a>
</div>
	<div class="sidebar-wrapper">
		<!-- User Section -->
		<div class="user">
			<div class="info">
				<div class="photo">
					<img src="/assets/img/faces/face-2.jpg" />
				</div>

				<a data-toggle="collapse" href="#collapseExample" class="collapsed">
					<span>
						{{ Auth::user()->name }}
						<b class="caret"></b>
					</span>
				</a>
				<div class="clearfix"></div>

				<div class="collapse" id="collapseExample">
					<ul class="nav">
						<li>
							<a href="{{ url('/user-profile') }}">
								<span class="sidebar-mini">Mp</span>
								<span class="sidebar-normal">My Profile</span>
							</a>
						</li>

						<li>
							<a href="{{ url('/user-profile/edit')}}">
								<span class="sidebar-mini">Ep</span>
								<span class="sidebar-normal">Edit Profile</span>
							</a>
						</li>

						<li>
							<!-- Change Password, Profile Image and Email settings -->
							<a href="{{ url('/user-settings')}}">
								<span class="sidebar-mini">S</span>
								<span class="sidebar-normal">Settings</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!-- User end -->
<!-- Dashboard -->
				<ul class="nav">
						<li class="active">
								<a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
										<i class="ti-panel"></i>
										<p>Dashboard
													<b class="caret"></b>
											</p>
								</a>
			<div class="collapse in" id="dashboardOverview">
				<ul class="nav">

					<li class="active"> <!-- make active class dynamic -->
						<a href="{{ url('/home')}}">
							<span class="sidebar-mini">O</span>
							<span class="sidebar-normal">Overview</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/stats')}}">
							<span class="sidebar-mini">S</span>
							<span class="sidebar-normal">Stats</span>
						</a>
					</li>
				</ul>
			</div>
						</li>
			<!-- End Dashboard -->
			<!-- Academy Section -->
		<li>
			<a data-toggle="collapse" href="#componentsExamples">
				<i class="ti-package"></i>

					<p>Academics
						 <b class="caret"></b>
					</p>

			</a>
			<div class="collapse" id="componentsExamples">
				<ul class="nav">
					<li>
						<a href="{{ url('/academic/overview')}}">
							<span class="sidebar-mini">OA</span>
							<span class="sidebar-normal">Overview</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/academic/class')}}">
							<span class="sidebar-mini">C&C</span>
							<span class="sidebar-normal">Class & Course</span>
						</a>
					</li>
												<li>
						<a href="{{ url('/academic/term')}}">
							<span class="sidebar-mini">T</span>
							<span class="sidebar-normal">Term</span>
						</a>
					</li>
												<li>
						<a href="{{ url('/academic/promote-student')}}">
							<span class="sidebar-mini">PS</span>
							<span class="sidebar-normal">Promote Student</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/academic/allocate-teacher')}}">
						<span class="sidebar-mini">TA</span>
						<span class="sidebar-normal">Teacher Allocation</span>
						</a>
						</li>

												<!-- <li>
						<a href="#">
							<span class="sidebar-mini">N</span>
							<span class="sidebar-normal">Notifications</span>
						</a>
					</li>
												<li>
						<a href="#">
							<span class="sidebar-mini">I</span>
							<span class="sidebar-normal">Icons</span>
						</a>
					</li>
												<li>
						<a href="#">
							<span class="sidebar-mini"><i class="ti-panel"></i></span>
							<span class="sidebar-normal">Typography</span>
						</a>
					</li> -->
										</ul>
			</div>
		</li>
<!-- Academic End -->

<!-- Student Section -->

		<li>
			<a data-toggle="collapse" href="#formsExamples">
										<i class="ti-clipboard"></i>
										<p>
					Student
											 <b class="caret"></b>
										</p>
								</a>
								<div class="collapse" id="formsExamples">
				<ul class="nav">
					<li>
						<a href="{{ url('/student/overview')}}">
							<span class="sidebar-mini">SO</span>
							<span class="sidebar-normal">Overview</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/student/add')}}">
							<span class="sidebar-mini">AS</span>
							<span class="sidebar-normal">Add Student</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/student/edit')}}">
							<span class="sidebar-mini">ES</span>
							<span class="sidebar-normal">Edit Student</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/student/remove')}}">
							<span class="sidebar-mini">RS</span>
							<span class="sidebar-normal">Remove Student</span>
						</a>
					</li>
												<li>
						<a href="{{ url('/student/assign')}}">
							<span class="sidebar-mini">AC</span>
							<span class="sidebar-normal">Assign Class</span>
						</a>
					</li>
										</ul>
								</div>
						</li>
						<!-- Student End -->

						<!-- Teacher  -->
						<li>
			<a data-toggle="collapse" href="#tablesExamples">
										<i class="ti-view-list-alt"></i>
										<p>
					Teacher
											 <b class="caret"></b>
										</p>
								</a>
								<div class="collapse" id="tablesExamples">
									<ul class="nav">
										<li>
											<a href="{{ url('/teacher/overview')}}">
												<span class="sidebar-mini">TO</span>
												<span class="sidebar-normal">Overview</span>
											</a>
										</li>
										<li>
											<a href="{{ url('/teacher/add')}}">
												<span class="sidebar-mini">AT</span>
												<span class="sidebar-normal">Add Teacher</span>
											</a>
										</li>
										<li>
											<a href="{{ url('/teacher/edit')}}">
												<span class="sidebar-mini">ET</span>
												<span class="sidebar-normal">Edit Teacher</span>
											</a>
										</li>
										<li>
											<a href="{{ url('/teacher/remove')}}">
												<span class="sidebar-mini">RT</span>
												<span class="sidebar-normal">Remove Teacher</span>
											</a>
										</li>
																	<li>
											<a href="{{ url('/teacher/assign')}}">
												<span class="sidebar-mini">AC</span>
												<span class="sidebar-normal">Assign Class</span>
											</a>
										</li>
															</ul>
								</div>
						</li>
						<!-- Teacher End -->

						<!-- Guardian  -->
		<li>
			<a data-toggle="collapse" href="#mapsExamples">
										<i class="ti-map"></i>
										<p>
					Guardian
											 <b class="caret"></b>
										</p>
								</a>
								<div class="collapse" id="mapsExamples">
				<ul class="nav">
					<li>
						<a href="{{ url('/guardian/overview')}}">
							<span class="sidebar-mini">GO</span>
							<span class="sidebar-normal">Overview</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/guardian/add')}}">
							<span class="sidebar-mini">AG</span>
							<span class="sidebar-normal">Add Guardian</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/guardian/edit')}}">
							<span class="sidebar-mini">EG</span>
							<span class="sidebar-normal">Edit Guardian</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/guardian/remove')}}">
							<span class="sidebar-mini">RG</span>
							<span class="sidebar-normal">Remove Guardian</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/guardian/assign')}}">
							<span class="sidebar-mini">AW</span>
							<span class="sidebar-normal">Add Ward</span>
						</a>
					</li>
										</ul>
								</div>
						</li>
						<!-- Guardian End -->

						<!-- Messaging Portal -->
						<li>
							<a data-toggle="collapse" href="#messageSMS">
									<i class="ti-map"></i>
									<p>
										Messages/SMS
										 <b class="caret"></b>
									</p>
							</a>
							<div class="collapse" id="messageSMS">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="sidebar-mini">E</span>
											<span class="sidebar-normal">Email</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sidebar-mini">S</span>
											<span class="sidebar-normal">SMS</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sidebar-mini">ES</span>
											<span class="sidebar-normal">Email Settings</span>
										</a>
									</li>
								</ul>
							</div>
										</li>
						<!-- Messaging End -->

						<!-- Attentance Clock In/Out -->
							<li>
								<a data-toggle="collapse" href="#attendance">
										<i class="ti-bar-chart-alt"></i>
										<p>
											Attendance<b class="caret"></b>
										</p>
								</a>

								<div class="collapse" id="attendance">
				<ul class="nav">
					<li>
						<a href="#">
							<span class="sidebar-mini">SA</span>
							<span class="sidebar-normal">Student Attendance</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">SCI</span>
							<span class="sidebar-normal">Staff Clock-In</span>
						</a>
					</li>
					<!-- <li>
						<a href="#">
							<span class="sidebar-mini">LP</span>
							<span class="sidebar-normal">Login Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">RP</span>
							<span class="sidebar-normal">Register Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">LSP</span>
							<span class="sidebar-normal">Lock Screen Page</span>
						</a>
					</li> -->
										</ul>
								</div>
							</li>
							<!-- End Clock In/Out -->

		<!-- <li>
								<a href="../calendar.html">
										<i class="ti-calendar"></i>
										<p>Calendar</p>
								</a>
						</li> -->
<!-- System Settings -->
		<!-- <li>
			<a data-toggle="collapse" href="#pagesExamples">
										<i class="ti-gift"></i>
										<p>
					System Settings
											 <b class="caret"></b>
										</p>
								</a>
								<div class="collapse" id="pagesExamples">
				<ul class="nav">
					<li>
						<a href="#">
							<span class="sidebar-mini">TP</span>
							<span class="sidebar-normal">Timeline Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">UP</span>
							<span class="sidebar-normal">User Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">LP</span>
							<span class="sidebar-normal">Login Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">RP</span>
							<span class="sidebar-normal">Register Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="sidebar-mini">LSP</span>
							<span class="sidebar-normal">Lock Screen Page</span>
						</a>
					</li>
										</ul>
								</div>
						</li> -->
						<!-- End System Settings -->
				</ul>
	</div>
</div>
