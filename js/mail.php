# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-ae4e4283f651d0653b0f6e855a9f5425');
$domain = "sandboxb84122fe00c949fc9f0a2bde04807fa5.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => 'Mailgun Sandbox <postmaster@sandboxb84122fe00c949fc9f0a2bde04807fa5.mailgun.org>',
                'to'      => 'Braden Fineberg <bfine9618@gmail.com>',
                'subject' => 'Hello Braden Fineberg',
                'text'    => 'Congratulations Braden Fineberg, you just sent an email with Mailgun!  You are truly awesome! '));

# You can see a record of this email in your logs: https://mailgun.com/app/logs .

# You can send up to 300 emails/day from this sandbox server.
# Next, you should add your own domain so you can send 10,000 emails/month for free.