<form id="schedule" class="mt-4">
    <div class="form-row">
        <div class="col-lg-4 offset-lg-2 mb-4 mb-lg-0">
            <input type="text" class="form-control" placeholder="Your Name" name="name">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
    </div>

    <div class="form-row mt-lg-4">
        <div class="col-lg-4 offset-lg-2 mb-4 mb-lg-0">
            <input type="text" class="form-control" placeholder="Phone" name="phone">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <select name="preferred_day" class="form-control">
                <option value="Preferred Day" disabled selected>Preferred Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
        </div>
    </div>

    <div class="form-row mt-lg-4">
        <div class="col-lg-4 offset-lg-2 mb-4 mb-lg-0">
            <select name="preferred_time" class="form-control">
                <option value="Preferred Time" disabled selected>Preferred Time</option>
                <option value="Early Morning">Early Morning</option>
                <option value="Late Morning">Late Morning</option>
                <option value="Early Afternoon">Early Afternoon</option>
                <option value="Late Afternoon">Late Afternoon</option>
            </select>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <select name="treatment" class="form-control">
                <option value="Services (optional)" disabled selected>Services (optional)</option>
                <!-- <option value="Complimentary Consultation">Complimentary Consultation</option> -->
                <?php $treatments = array( 
        'post_type' => 'treatments', 
        'posts_per_page' => -1, 
        'order' => 'ASC' 
        ); 
        $loop = new WP_Query( $treatments  );
        if($loop->have_posts()): ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <option class="<?php the_title() ?>" value="<?php the_title() ?>"><?php the_title() ?></option>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); endif; ?>
            </select>
        </div>
    </div>

    <div class="form-row mt-lg-4">
        <div class="col-lg-8 offset-lg-2 mb-4 mb-lg-0">
            <select name="provider" class="form-control">
                <option value="Pick a Provider" disabled selected>Pick a Provider</option>
                <option value="Tobi Baker-Daigle">Tobi Baker-Daigle, RN</option>
                <option value="Christine McMackin">Christine McMackin, MSN, FNP, NP-C</option>
<!--                 <option value="Sandy Hunt">Sandy Hunt, NP-C</option> -->
				<option value="Shelly Lombardozzi">Shelly Lombardozzi, NP-C</option>
				
            </select>
        </div>
    </div>

    <div class="form-row mt-lg-4">
        <div class="col-lg-8 offset-lg-2 mb-4 mb-lg-0">
            <textarea id="w3mission" rows="4" cols="50" placeholder="Comments" class="form-control"
                name="comment"></textarea>
        </div>
    </div>
    <!-- <div class="col-12" style="    margin: 30px; display: flex; align-items: center; justify-content: center;">
        <div class="input">
            <div class="g-recaptcha" data-sitekey="6LcWy-MZAAAAAN19l0XdXbo4dC4RDx7rLZiak7il"></div>
        </div>
    </div> -->
    <div class="form-row mt-lg-4">
        <div class="col-lg-4 mx-auto">
            <button class="ui-btn ui-btn-main d-block w-100" type="submit">SUBMIT REQUEST</button>
        </div>
        <div class="col-lg-12 mx-auto">
            <div id="form-results" class="mx-auto"></div>
        </div>
    </div>
</form>