<?php include_once('header.php'); ?>

<div align="center">
  <H1>Contact Form</H1>
<form action="/hello-world/src/classes/contact.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Abc Xyz" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="abc.xyz@email.com" required>
  </div>
  <div class="elem-group">
    <label for="department-selection">Choose Concerned Department</label>
    <select id="department-selection" name="concerned_department" required>
        <option value="">Select a Department</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="technical support">Technical Support</option>
    </select>
  </div>
  <div class="elem-group">
    <label for="title">Reason For Contacting Us</label>
    <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="message" placeholder="Say whatever you want." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>
</div>
<?php include_once('footer.php'); ?>