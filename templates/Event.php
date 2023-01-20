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

    <!-- Start join form -->
    <section id="currentopening-joinform">
      <div class="row px-0 mx-0">
        <div
          class="col-lg-6 col-md-6 col-sm-12 px-0 careers-lab-left-col-image"
        >
          <div class="currentopening_left-card">
            <h1 class="text-white">WELCOME TO</h1>
            <h1 class="co-clubmash">CLUB SMASH</h1>
            <p class="text-white">
              Everyone wants the best talent available but they all search in
              the same places. We don’t just look for talented individuals that
              can fill in the position, we make sure they can have a positive
              impact in your organization while getting the job done. The
              perfect fit is never unexpected, we make sure they can have a
              positive impact in your we have achieved it through good
              listening, a keen eye, and industry knowledge.
            </p>
          </div>
          <img
            src="./assets/CurrentOpening/Images/smashleftside.png"
            alt="left2image"
          />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 px-0 mx-0">
          <div class="form">
            <h2 class="py-5"><strong>Join Form</strong></h2>
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input
                type="Name"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="Email"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputProfile1">Professional Profile</label>
              <input
                type="Profile"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Country</label>
              <select class="form-control py-2" id="exampleFormControlSelect1">
                <option>USA</option>
                <option>France</option>
                <option>Uk</option>
                <option>UAE</option>
                <option>England</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">
                Where Did You Hear About Us?
              </label>
              <select
                class="form-control py-2 text-dark"
                id="exampleFormControlSelect2"
              >
                <option>LinkedIn</option>
                <option>Facebook</option>
                <option>Twitter</option>
                <option>Instagram</option>
                <option>Jobs.com</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputHobby1">What Are Your Hobbies?</label>
              <input
                type="Hobby"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputWork1">
                What Would You Like To Work in Our Labs?
              </label>
              <input
                type="Work"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputInviteFriends1">
                Would You Like To Invite A Friend To The Lab (Email)?
              </label>
              <input
                type="InviteFriends"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputLikeWork1">
                What Would You Like To Work In Our Labs?
              </label>
              <input
                type="LikeWork"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputLikeWork1">
                What Would You Like To Work In Our Labs?
              </label>
              <input
                type="LikeWork"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputLikeWork1">
                What Would You Like To Work In Our Labs?
              </label>
              <input
                type="LikeWork"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputLikeWork1">
                What Would You Like To Work In Our Labs?
              </label>
              <input
                type="LikeWork"
                class="form-control py-2 mb-2"
                placeholder="Placeholder"
              />
            </div>
            <button class="btn btn-primary text-dark career-lab-button">
              SEND
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- End -->

    <!-- start Newsletter cards -->
    <section id="smashlab-newsletter-card">
      <div class="container">
        <div class="row"></div>
      </div>
    </section>
    <!-- End Newsletter card -->
    <!-- <start subscribe-card section -->
    <section id="smashlab-subscribe_card">
      <div class="container">
        <div class="row">
          <div class="pt-auto smashlab-subcribe-card">
            <h2 class="text-center text-light py-0 my-0">
              <strong>Newsletter</strong>
            </h2>
            <div class="card home-newsletter-horizcard pt-4 pb-2 py-5 my-0">
              <p class="home-newsletter-horizcard-p2">
                Do you want to receive information about upcoming Labs?
              </p>
              <div
                class="d-flex flex-row px-5 mx-5 home-newsletter-horizcard-input"
              >
                <input
                  type="text"
                  class="form-control mx-3"
                  placeholder="Your email address"
                  aria-label="Email address"
                  aria-describedby="basic-addon2"
                />
                <button class="btn btn-danger">Subscribe</button>
              </div>
              <p class="pt-3 home-newsletter-horizcard-p3">
                Your email is safe with us we don't spam
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>







<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
