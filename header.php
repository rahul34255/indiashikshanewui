<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

	<!-- Header Start -->
	<nav class="navbar-expand-lg navbar-dark  navbar navigation-wrap sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://indiashiksha.com/wp-content/uploads/2024/06/logocopy.png" alt="logo"
                    style="height:50px; width:100%;"></a>
                    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
                   
                </button>
   
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://indiashiksha.com/" >Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static ">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                               data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-expanded="false" aria-label="Toggle navigation">
                               Engineering
                            </a>
                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <div class="mega-content px-md-4" >
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Colleges By Degree</h5>
                                                 <div class="list-group">
                                                     <a class="list-group-item" href="#">B.TECH</a>
                                                     <a class="list-group-item" href="#">M.TECH</a>
                                                     <a class="list-group-item" href="#">PHD</a>
                                                     <a class="list-group-item" href="#">Diploma</a>
                                                     <a class="list-group-item" href="#">B.E</a>
                                                 </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5> Colleges by City</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Bangalore</a>
                                                    <a class="list-group-item" href="#">Greater Noida</a>
                                                    <a class="list-group-item" href="#">Delhi</a>
                                                    <a class="list-group-item" href="#">Kolkata</a>
                                                    <a class="list-group-item" href="#">Mumbai</a>
                                                </div>
                                           </div>
                                           <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                              <h5>Exams</h5>
                                              <div class="list-group">
                                                  <a class="list-group-item" href="#">JEE Mains</a>
                                                  <a class="list-group-item" href="#">JEE Advanced</a>
                                                  <a class="list-group-item" href="#">Gate</a>
                                                  <a class="list-group-item" href="#">WBJEE</a>
                                                  <a class="list-group-item" href="#">Comed-K</a>
                                              </div>
                                            </div>
                                           <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                               <h5>Quick Links</h5>
                                               <div class="list-group">
                                                    <a class="list-group-item" href="#">News</a>
                                                    <a class="list-group-item" href="#">Articles</a>
                                                    <a class="list-group-item" href="#">Exam List</a>
                                                    <a class="list-group-item" href="#">Q&A</a>
                                                    <a class="list-group-item" href="#">Distance Learning</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"aria-expanded="false" aria-label="Toggle navigation">
                                Medical
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">MBBS</a>
                                                       <a class="list-group-item" href="#">B.Pharma</a>
                                                       <a class="list-group-item" href="#">M.Pharma</a>
                                                       <a class="list-group-item" href="#">Nursing</a>
                                                       <a class="list-group-item" href="#">M.D.</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                      <a class="list-group-item" href="#">Delhi</a>
                                                      <a class="list-group-item" href="#">Chennai</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Pune</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">NEET(PG)</a>
                                                    <a class="list-group-item" href="#">NEET(UG)</a>
                                                    <a class="list-group-item" href="#">AP EAMCET</a>
                                                    <a class="list-group-item" href="#">AP PGECET</a>
                                                    <a class="list-group-item" href="#">AIIMS Nursing</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Quick Links</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                               data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-expanded="false" aria-label="Toggle navigation">
                                Law
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">BA</a>
                                                       <a class="list-group-item" href="#">MA</a>
                                                       <a class="list-group-item" href="#">LLB</a>
                                                       <a class="list-group-item" href="#">LLM</a>
                                                       <a class="list-group-item" href="#">BA+LLB</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Jaipur</a>
                                                      <a class="list-group-item" href="#">Chandigarh</a>
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Pune</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">CLAT</a>
                                                    <a class="list-group-item" href="#">SET Law</a>
                                                    <a class="list-group-item" href="#">AILET</a>
                                                    <a class="list-group-item" href="#">DU LLB</a>
                                                    <a class="list-group-item" href="#">BHU UET</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Quick Links</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                              data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-expanded="false"aria-label="Toggle navigation">
                              Management
                            </a>
                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">BBA</a>
                                                       <a class="list-group-item" href="#">MBA</a>
                                                       <a class="list-group-item" href="#">PGDM</a>
                                                       <a class="list-group-item" href="#">BBA+MBA</a>
                                                       <a class="list-group-item" href="#">Hotel Management</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Delhi</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Pune</a>
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                      <a class="list-group-item" href="#">Chandigarh</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">CAT</a>
                                                    <a class="list-group-item" href="#">GMAT</a>
                                                    <a class="list-group-item" href="#">SNAP</a>
                                                    <a class="list-group-item" href="#">MAT</a>
                                                    <a class="list-group-item" href="#">SET(BBA)</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Quick Links</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" aria-expanded="false"aria-label="Toggle navigation">
                              Science
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">B.SC</a>
                                                       <a class="list-group-item" href="#">M.SC</a>
                                                       <a class="list-group-item" href="#">PHD</a>
                                                       <a class="list-group-item" href="#">B.Ed</a>
                                                       <a class="list-group-item" href="#">M.Phil</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                      <a class="list-group-item" href="#">Chandigarh</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Delhi</a>
                                                      <a class="list-group-item" href="#">Greater Noida</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">NEST</a>
                                                    <a class="list-group-item" href="#">BUAT</a>
                                                    <a class="list-group-item" href="#">NET</a>
                                                    <a class="list-group-item" href="#">Biology</a>
                                                    <a class="list-group-item" href="#">Chemistry</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Quick Links</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>

                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="https://indiashiksha.com/blog/" id ="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"aria-expanded="false"aria-label="Toggle navigation">
                               Blog
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">B.A.</a>
                                                       <a class="list-group-item" href="#">M.A</a>
                                                       <a class="list-group-item" href="#">PHD</a>
                                                       <a class="list-group-item" href="#">B.Ed</a>
                                                       <a class="list-group-item" href="#">M.Phil</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Greater Noida</a>
                                                      <a class="list-group-item" href="#">Chandigarh</a>
                                                      <a class="list-group-item" href="#">Bhopal</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">JUET-M.Ed</a>
                                                    <a class="list-group-item" href="#">UPSC</a>
                                                    <a class="list-group-item" href="#">BPSC</a>
                                                    <a class="list-group-item" href="#">SSC</a>
                                                    <a class="list-group-item" href="#">Railway</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Degreewise College</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" aria-expanded="false"aria-label="Toggle navigation">
                                Exams
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Exams By Stream</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">Engineering</a>
                                                       <a class="list-group-item" href="#">Law</a>
                                                       <a class="list-group-item" href="#">Management</a>
                                                       <a class="list-group-item" href="#">Science</a>
                                                       <a class="list-group-item" href="#">Commerce</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Cutoffs</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Gate 2023</a>
                                                      <a class="list-group-item" href="#">UPSE</a>
                                                      <a class="list-group-item" href="#">WBJEE</a>
                                                      <a class="list-group-item" href="#">JEE Main Results</a>
                                                      <a class="list-group-item" href="#">NEET UG Results</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">GATE 2023</a>
                                                    <a class="list-group-item" href="#">UPSE</a>
                                                    <a class="list-group-item" href="#">WBJEE</a>
                                                    <a class="list-group-item" href="#">JEE+Advanced 2023</a>
                                                    <a class="list-group-item" href="#">NEET 2023</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Rank Predictors</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">JEE MAINS 2023</a>
                                                      <a class="list-group-item" href="#">WBJEE 2023</a>
                                                      <a class="list-group-item" href="#">IPU CET(Law)</a>
                                                      <a class="list-group-item" href="#">NEET 2023</a>
                                                      <a class="list-group-item" href="#">VTU 2023</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                              data-bs-toggle="dropdown"  data-bs-auto-close="outside"aria-expanded="false"aria-label="Toggle navigation">
                              Schemes
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown" >
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Degreewise College</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">B.TECH</a>
                                                       <a class="list-group-item" href="#">M.TECH</a>
                                                       <a class="list-group-item" href="#">PHD</a>
                                                       <a class="list-group-item" href="#">Diploma</a>
                                                       <a class="list-group-item" href="#">B.E</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Degreewise College</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Degreewise College</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">B.TECH</a>
                                                    <a class="list-group-item" href="#">M.TECH</a>
                                                    <a class="list-group-item" href="#">PHD</a>
                                                    <a class="list-group-item" href="#">Diploma</a>
                                                    <a class="list-group-item" href="#">B.E</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Degreewise College</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                              data-bs-toggle="dropdown"  data-bs-auto-close="outside"aria-expanded="false"aria-label="Toggle navigation">
                              Result
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Degreewise College</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">B.TECH</a>
                                                       <a class="list-group-item" href="#">M.TECH</a>
                                                       <a class="list-group-item" href="#">PHD</a>
                                                       <a class="list-group-item" href="#">Diploma</a>
                                                       <a class="list-group-item" href="#">B.E</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Degreewise College</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Degreewise College</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">B.TECH</a>
                                                    <a class="list-group-item" href="#">M.TECH</a>
                                                    <a class="list-group-item" href="#">PHD</a>
                                                    <a class="list-group-item" href="#">Diploma</a>
                                                    <a class="list-group-item" href="#">B.E</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Degreewise College</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                              data-bs-toggle="dropdown"  data-bs-auto-close="outside"aria-expanded="false"aria-label="Toggle navigation">
                              Jobs
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Degreewise College</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">B.TECH</a>
                                                       <a class="list-group-item" href="#">M.TECH</a>
                                                       <a class="list-group-item" href="#">PHD</a>
                                                       <a class="list-group-item" href="#">Diploma</a>
                                                       <a class="list-group-item" href="#">B.E</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Degreewise College</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Degreewise College</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">B.TECH</a>
                                                    <a class="list-group-item" href="#">M.TECH</a>
                                                    <a class="list-group-item" href="#">PHD</a>
                                                    <a class="list-group-item" href="#">Diploma</a>
                                                    <a class="list-group-item" href="#">B.E</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Degreewise College</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">B.TECH</a>
                                                      <a class="list-group-item" href="#">M.TECH</a>
                                                      <a class="list-group-item" href="#">PHD</a>
                                                      <a class="list-group-item" href="#">Diploma</a>
                                                      <a class="list-group-item" href="#">B.E</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         
                          </li>
                          <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle active" href="#" id ="navbarDropdown" role="button"
                               data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-expanded="false" aria-label="Toggle navigation">
                                How to
                            </a>
                              <div class="dropdown-menu shadow"aria-labelledby="navbarDropdown">
                                  <div class="mega-content px-md-4">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                   <h5>Colleges By Degree</h5>
                                                   <div class="list-group">
                                                       <a class="list-group-item" href="#">BA</a>
                                                       <a class="list-group-item" href="#">MA</a>
                                                       <a class="list-group-item" href="#">LLB</a>
                                                       <a class="list-group-item" href="#">LLM</a>
                                                       <a class="list-group-item" href="#">BA+LLB</a>
                                                   </div>
                                              </div>
                                              <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                  <h5>Colleges By City</h5>
                                                  <div class="list-group">
                                                      <a class="list-group-item" href="#">Jaipur</a>
                                                      <a class="list-group-item" href="#">Chandigarh</a>
                                                      <a class="list-group-item" href="#">Bangalore</a>
                                                      <a class="list-group-item" href="#">Mumbai</a>
                                                      <a class="list-group-item" href="#">Pune</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Exams</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">CLAT</a>
                                                    <a class="list-group-item" href="#">SET Law</a>
                                                    <a class="list-group-item" href="#">AILET</a>
                                                    <a class="list-group-item" href="#">DU LLB</a>
                                                    <a class="list-group-item" href="#">BHU UET</a>
                                                </div>
                                              </div>
                                             <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                 <h5>Quick Links</h5>
                                                 <div class="list-group">
                                                      <a class="list-group-item" href="#">News</a>
                                                      <a class="list-group-item" href="#">Articles</a>
                                                      <a class="list-group-item" href="#">Q&A</a>
                                                      <a class="list-group-item" href="#">Exam List</a>
                                                      <a class="list-group-item" href="#">Distance Learning</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <<div class="items "><span class="icon feature_box_col_six "><i class="fa-regular fa-user"></i></span>
                    </div>
                    </ul>
               </div>    
            </div>
        </nav>



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

