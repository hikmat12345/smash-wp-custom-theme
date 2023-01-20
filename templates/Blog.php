<?php
/**
 * Template Name: Home Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
 
    <!-- <start main section -->
    <section id="post" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form form-main-sect">
                        <div class="form-group input-group text-center py-3 form-group1">
                            <input class="text-start form-control" type="search"
                                placeholder="Enter Search Keyboard..." /><span class="input-group-text">
                                    <i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="card py-3 my-4">
                        <h3 class="py-2">Recent Post</h3>
                        <div class="d-flex flex-row py-2">
                            <div>
                                <img src="./assets/Blog/image/blogrecentpost1.png" alt="blogrecentpost1" />
                            </div>
                            <div class="p-2">
                                <p>Everyone wants the best talent available but they all search in the same places.</p>
                                <span class="main-card-date">15/10/22</span>
                            </div>
                        </div>

                        <div class="d-flex flex-row py-2">
                            <div>
                                <img src="./assets/Blog/image/blogrecentpost2.png" alt="blogrecentpost1" />
                            </div>
                            <div class="p-2">
                                <p>Everyone wants the best talent available but they all search in the same places.</p>
                                <span class="main-card-date">15/10/22</span>
                            </div>
                        </div>

                        <div class="d-flex flex-row py-2">
                            <div>
                                <img src="./assets/Blog/image/blogrecentpost3.png" alt="blogrecentpost1" />
                            </div>
                            <div class="p-2">
                                <p>Everyone wants the best talent available but they all search in the same places.</p>
                                <span class="main-card-date">15/10/22</span>
                            </div>
                        </div>
                    </div>
                    <div class="card py-3 my-4">
                        <h3 class="py-2">Categories</h3>
                        <div class="d-flex flex-row py-1">
                            <div class="categories-list-style">
                                <ul>
                                    <li>
                                        <p>Programing</p>
                                    </li>
                                    <li>
                                        <p>Quality Assurance</p>
                                    </li>
                                    <li>
                                        <p>Artificial Intelligence</p>
                                    </li>
                                    <li>
                                        <p>Vediogaming</p>
                                    </li>
                                    <li>
                                        <p>Mobile Development</p>
                                    </li>
                                    <li>
                                        <p>Marketing</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card py-3 my-4">
                        <h3 class="py-2">Tags</h3>
                        <div class="d-flex flex-row">
                            <div class="categories-style d-flex">
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Analitycs</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Automation</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Quality Assurance</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Marketing</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Coding</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">UX Design</h5>
                                </div>
                                <div class="post-tag-card">
                                    <h5 class="py-3 px-4">Brending</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="post-recent-rightsideimg1 pb-3">
                        <img src="./assets/Blog/image/blogright1.png" />
                    </div>

                    <div class="post-recent-rightsideim2 py-3">
                        <img src="./assets/Blog/image/blogright2.png" />
                    </div>

                    <div class="post-recent-rightsideimg3 py-3">
                        <img src="./assets/Blog/image/blogright3.png" />
                    </div>

                    <div class="post-recent-rightsideimg3 py-3">
                        <img src="./assets/Blog/image/blogright4.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post section-->

    <!-- start subscribe section -->

    <section id="subscribe-card">
        <div class="container">
            <div class="row">
                <div class="card home-newsletter-horizcard pt-4 pb-2 py-5 my-5">
                    <p class="home-newsletter-horizcard-p2">Do you want to receive information about upcoming Labs?</p>
                    <div class="d-flex flex-row px-5 mx-5 home-newsletter-horizcard-input">
                        <input type="text" class="form-control mx-3" placeholder="Your email address"
                            aria-label="Email address" aria-describedby="basic-addon2">
                        <button class="btn subscribe-card-button">Subscribe</button>
                    </div>
                    <p class="pt-3 home-newsletter-horizcard-p3">Your email is safe with us we don't spam</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End subscribe section -->








<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
