<?php include('nav.php'); ?>

<div class="main2">
    <div class="img-customer-service">
        <div class="customer-service-head">
            <span class="customer">Customer</span>
            <span class="service">Service</span>
        </div>
    </div>

    <div class="faq-align">
        <div class="faq-container">
            <div class="simplesite">
                <h2>FAQ</h2>
                <div class="line"></div>
            </div>
            <div class="tab">
                <button class="tablinks" id="SubscriptionBtn" onclick="SubscriptionBtn()">SimpleSite subscriptions and Payment</button>
                <button class="tablinks2" id="GeneralBtn" onclick="GeneralBtn()">General use of SimpleSite</button>
            </div>

            <div class="questionaire-subscriptions" id="questionaire-subscriptions" onclick="myFunction(event)">
                <button class="accordion">How much does a Simplesite subscription cost and what features are included?</button>
                <div class="panel">
                    <p>Table</p>
                </div>

                <button class="accordion">How can I get my own domain name?</button>
                <div class="panel">
                    <p>At SimpleSite it’s easy to get your own domain name for your website. When you purchase a subscription you can choose your own domain name, e.g., www.yourname.com instead of yourname.SimpleSite.com. In addition, you can register up
                        to five custom email addresses, for example info@yourname.com.
                        <p class="panel-space">To upgrade and get your own domain name please click on the link below.</p>
                        <p a target="_blank" href="https://www.simplesite.com/pages/service-login.aspx" class="panel-link">Get own domain</p>
                </div>

                <button class="accordion">I have recieved a SimpleSite gift certificate.How do I redeem it?</button>
                <div class="panel">
                    <p class="panel-space">If you have received a SimpleSite gift certificate and want to use it to make a SimpleSite PRO website, click this link to follow the instructions:</p>
                    <p a target="_blank" href="https://www.simplesite.com/pages/gift-certificate.aspx" class="panel-link"> Click here to redeem your SimpleSite gift certificate.</p>
                </div>

                <button class="accordion">Can I renew a current subscription with a gift certificate?</button>
                <div class="panel">
                    <p>Yes, but only if the SimpleSite gift certificate you received has that option listed. If it does, you can redeem it here</p>
                </div>

                <button class="accordion">How can I pay for or renew my subscription</button>
                <div class="panel">
                    <p>Click here to go to the SimpleSite subscription renewal page.</p>
                </div>

                <button class="accordion">My website is offline.Why?</button>
                <div class="panel">
                    <p class="panel-space">This can happen when a subscription has expired and no payment has been made.</p>
                    <p>
                        If your payment was confirmed and your website is offline, or you have a basic free subscription, please contact our customer service team at<span class="panel-link"> customerservice@simplesite.com </span>and provide your website's
                        address. We kindly ask you to contact us from the email address used to register your website.</p>
                    <p class="panel-space">
                        Please note that SimpleSite reserves the right to delete websites that violate our Terms & Conditions. Click here to read our Terms & Conditions.</p>
                </div>

                <button class="accordion">What happens when my subscription expires?</button>
                <div class="panel">
                    <p class="panel-space">If you are registered with our Payment Service, your subscription will automatically be renewed. If we are unable to renew it automatically, we will notify you by email.</p>
                    <p> If your subscription is not renewed, it will expire and your website will go offline. We will keep your content for 3 months. During these 3 months, you can still login to your website's editor and make a payment. If the subscription
                        is not renewed within 3 months after it has expired, your website will be permanently deleted, and its content will be lost. A deleted website can no longer be recovered.</p>
                </div>

                <button class="accordion">What happens if don't want to renew my subscription?</button>
                <div class="panel">
                    <p class="panel-space">If you do not wish to renew your PRO or Ecommerce subscription, you have 2 options:</p>
                    <p>1) Deactivate the automatic payment service on the subscription section of your website's editor. Once your current subscription expires, your website will go offline and will be permanently deleted automatically after 3 months of
                        expired.
                    </p>
                    <p class="panel-space">2) Delete your website immediately, by clicking the delete button on your website's editor. A deleted website can no longer be recovered and its content will be lost.</p>
                    <p> Alternatively, you can send a request to our Customer Service team at<span class="panel-links">customerservice@simplesite.com</span>.</p>
                    <p class="panel-space">If your subscription was recently renewed automatically, but you do not wish to continue with it, you can request a refund within 14 days of the payment date.</p>
                </div>

                <button class="accordion">How many days do I have left before my subscription expires?</button>
                <div class="panel">
                    <p>To check the status of your subscirption, log in to your website's editor and visit the subscription section. If your automatic payment service is disabled, we recommend you renew your subscription at least 24 hrs before it expires.
                    </p>
                </div>

                <button class="accordion">What do I need to start my own business?</button>
                <div class="panel">
                    <p>Opening a business can be intimidating, especially when you don’t have any prior experience. We’ve got you covered – check our ready-made guides for getting started in different niches, whether you want to find out how to open a Bed
                        & Breakfast, how to start a pizzeria, or open your own massage center. ​
                    </p>
                </div>
            </div>

            <div class="questionaire-general-use" id="questionaire-general-use">
                <button class="accordion">I forgot my password.What should I do?</button>
                <div class="panel">
                    <p class="panel-space-gen">To reset your password<span class="panel-links">visit our login page</span>, click on "Have you forgotten your password?", and enter the required information. Then, we will send a password reset link to your registered email address.
                        Please remember to check your spam/promotions folders in case our email ends there.</p>
                    <p>
                        If you do not receive the password reset link, or still have problems logging in to your website's editor, please contact our customer service team at <span>customerservice@simplesite.com</span>, and provide your website's address.
                        We kindly ask you to contact us from the email address used to register your website.</p>
                </div>

                <button class="accordion">Can I change the name of the Simplesite website?</button>
                <div class="panel">
                    <p>Yes, you can!</p>
                    <p class="panel-space-gen">
                        If you have a basic free subscription, your website's address is based on your username, and you can modify it via the "Account" section of your website's editor by changing your "website name". Keep in mind that this will change your username as well.
                    </p>
                    <p>
                        If your website has a domain name, and you wish to change it, please contact our customer service team at<span class="panel-links">customerservice@simplesite.com</span>, and provide your website's address. We kindly ask you to
                        contact us from the email address used to register your website.
                    </p>
                </div>


                <button class="accordion">Can I change the size of my images?</button>
                <div class="panel">
                    <p>No, the size of your images is automatically set by the webpage template you chose.</p>
                </div>

                <button class="accordion">Can I use my Simplesite website for commercial purposes?</button>
                <div class="panel">
                    <p>You can use your SimpleSite for commercial purposes, as long as the content of your pages complies with our general Terms & Conditions. You can make use of our E-commerce subscription to sell products and services on your website.
                        Please note we do not permit website owners to resell their website or domain names to others.</p>
                </div>

                <button class="accordion">Can anyone see my Simplesite?</button>
                <div class="panel">
                    <p>Yes. Please note there is NO password protection option for your website. This means that everyone who knows the URL of your website can visit it. We recommend you always consider carefully what you publish on your website. Avoid publishing
                        anything online that is confidential, offensive or unsuitable for public viewing. Search engines such as Google and Bing will also be able to index your website.</p>
                </div>

                <button class="accordion">Does Simplesite save my images?</button>
                <div class="panel">
                    <p>Yes, but we save them in a different size and format than the images you have on your computer of device. We make images smaller to reduce page load times. This means that SimpleSite is not a backup for your images or somewhere that
                        you can store images. SimpleSite is a place where you can show your images, but remember to have a backup of your content before uploading anything.</p>
                </div>

                <button class="accordion">Will there be advertising on my website?</button>
                <div class="panel">
                    <p>There are no ads, pop-up boxes or sponsorships from third parties on your website.</p>
                </div>

                <button class="accordion">I have not received the Simplesite weekly newsletter.Why is that?</button>
                <div class="panel">
                    <p class="panel-space-gen">Check to make sure your email address is valid and working. Log in and review and edit the information you provided when you registered with SimpleSite.com.
                    </p>
                    <p>
                        The newsletter email could have ended up in your spam folder. If that is the case, please add SimpleSite.com to your list of safe senders/trusted websites in your own email settings.</p>
                </div>

                <button class="accordion">Can I make my own templates for my Simplesite website?</button>
                <div class="panel">
                    <p>No, at present this is not possible. You can only use the templates available on SimpleSite.com. However, we may offer this feature sometime in the future..</p>
                </div>

                <button class="accordion">What is or what will be my website address on the Internet?</button>
                <div class="panel">
                    <p class="panel-space-gen">Your username becomes your website address. For example, if you choose the username "Caulfields", then your website address will be caulfields.SimpleSite.com. When you purchase a SimpleSite subscription, you can choose your own custom
                        domain name, for example www.caulfields.com.
                    </p>
                    <p>To subscribe and get your own domain name please click <span class="panel-links">here</span>.</p>
                </div>

                <button class="accordion">If I buy more than one Simplesite website,will I get a discount?</button>
                <div class="panel">
                    <p>We do not offer discounts on multiple purchases.</p>
                </div>

                <button class="accordion">What are the Terms & Conditions on Simplesite.com?</button>
                <div class="panel">
                    <p>Click here to read our Terms & Conditions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="customer-service-address-head">
        <div class="customer-service-simplesite">
            <h2>CUSTOMER SERVICE</h2>
            <div class="line"></div>
        </div>
        <div class="email">
            <p><span class="email-head">Email: </span><span class="email-bold">customerservice@simplesite.com</span></p>
        </div>
        <div class="customer-service-para">
            <p>We try to respond to all requests within two business days.</p>
            <p>Please describe your issue and include the name of your website to make it easier for us to help you.</p>
        </div>
        <div class="address">
            <p><span class="bold">SimpleSite.com</p>
                    <div class="light">
                        <p>Toldbodgade 31, 3.tv</p>
                        <p>1253 Copenhagen K</p>
                        <p>Denmark</p>
                        <p>VAT Reg No: DK27 97 24 54</p>
                        <p>Owned by SimpleSite ApS VAT Reg No DK10079861</p>
                    </div>
            </div>
        </div>
<?php 
include('footer.php'); 
?>
</body>

</html>