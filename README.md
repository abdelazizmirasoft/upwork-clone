

## About Upwork-Clone

Upwork clone is a full-stack application that sets up features such as an advanced search bar, application submission, flash messages, messaging and more, using Laravel 9 and Livewire. We will add then TailwindCSS and AlpineJS to complete our TALL stack

## Set up and deploy Upwork-Clone

`git clone https://github.com/abdelazizmirasoft/upwork-clone.git upwork-clone`

`cd upwork-clone`

Build the containers:

`./vendor/bin/sail up -d`

Instead of repeatedly typing vendor/bin/sail to execute Sail commands, you may wish to configure a Bash alias that allows you to execute Sail's commands more easily (optional):

`alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`

`sail composer update`

`sail artisan migrate`



