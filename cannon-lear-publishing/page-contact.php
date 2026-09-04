<?php get_header(); ?><section class="contact-hero"><div class="wrap"><p class="kicker">Contact</p><h1>Contact Cannon-Lear Publishing</h1><p>Questions about publications, author appearances, bulk orders, media, rights, or partnerships are welcome.</p></div></section><section class="contact-shell"><div class="wrap"><div class="contact-card">
  <div class="notice">This form opens an email to Cannon-Lear Publishing. Please do not include confidential or sensitive information.</div>
  <form action="mailto:cannonco@cannonco.net" method="post" enctype="text/plain">
    <label for="name">Name</label><input id="name" name="name" required>
    <label for="email">Email</label><input id="email" name="email" type="email" required>
    <label for="organization">Organization</label><input id="organization" name="organization">
    <label for="reason">Reason for Contact</label><select id="reason" name="reason"><option>General Inquiry</option><option>Book or Publication Question</option><option>Bulk or Institutional Order</option><option>Author or Speaking Inquiry</option><option>Media or Interview Request</option><option>Review Copy Request</option><option>Rights or Permissions</option><option>Partnership or Collaboration</option></select>
    <label for="subject">Subject</label><input id="subject" name="subject" required>
    <label for="message">How Can We Help?</label><textarea id="message" name="message" required></textarea>
    <div class="buttons"><button class="btn" type="submit">Send Inquiry</button></div>
  </form>
</div></div></section><?php get_footer(); ?>
