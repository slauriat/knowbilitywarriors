<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Donate</title>
<?php include '../layouts/header.php'; ?>

<main id="mainContent" role="main" tabindex="-1">
    <div>
        <h1>Donate</h1>
    </div>
    <div class="col-md-4">
        <img src="../images/kitchen.jpg"  width="300px" class="img-rounded" alt="Accessible kitchen">
        <form  style="margin:3em 0;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="99VH99YEQSKE8">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate via PayPal">
            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
    <div class="col-md-8" style="margin-bottom:2em;">
        <aside role="complementary">
            <blockquote>
                <p>
                    The roll-in shower gives us a sense of independence and freedom and peace of mind
                    knowing that we can function in this house freely…Housing is a basic implement in
                    life and if people can’t afford it, they’re missing one of their fundamental
                    rights.. Without those opportunities for everyone, how can we truly be free? Let
                    everyone have a chance at happiness and contentment and a feeling of belonging in
                    their community.
                </p>
                <footer>
                    <cite>-Linda S., AHA! Tenant</cite>
                </footer>
            </blockquote>
        </aside>
        <h2>By making a donation to AHA, you:</h2>
        <ul>
            <li>help a low-income person with a disability live in a safe, decent home</li>
            <li>facilitate the full integration of people with disabilities into the community</li>
            <li>provide housing for someone transitioning out of a nursing home or other institution</li>
            <li>create a more diverse and inclusive community</li>
        </ul>
        <h2>Support AHA!:</h2>
        <ul>
            <li>Direct a donation to support the accessibility, energy efficiency, and upkeep of an AHA! home</li>
            <li>Donate a gift card from Home Depot, Lowes, Office Depot, Staples, etc.</li>
            <li>Donate or will a home to AHA!</li>
        </ul>
        <h2>How Your Donations Work:</h2>
        <ul>
            <li>$50 helps AHA! purchase enough HVAC filters to keep a tenant’s home energy efficient for one year.</li>
            <li>$100 helps AHA! add grab bars to make a bathroom more accessible.</li>
            <li>$500 helps AHA! build a ramp.</li>
            <li>$1,000 helps AHA! invest in purchasing and rehabilitating more homes.</li>
        </ul>
        <h2>To make a tax-deductible donation, donate via PayPal or send a check to:</h2>
        <div style="margin-left:1em;">
            <address class="vcard">
                <p class="org" style="font-weight:bold;">Accessible Housing Austin!</p>
                <p class="adr">
                    <span class="street-address">1640-A E. 2nd Street</span>,
                    <span class="locality">Austin</span>,
                    <span class="region">Texas</span>
                    <span class="postal-code">78702</span>
                </p>
            </address>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>

</body>
</html>
