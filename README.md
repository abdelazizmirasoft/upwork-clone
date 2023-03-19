

## About Upwork-Clone

Upwork clone is a full-stack application that sets up features such as an advanced search bar, application submission, flash messages, messaging and more, using Laravel 9 and Livewire. We will add then TailwindCSS and AlpineJS to complete our TALL stack

## Demo Video

https://user-images.githubusercontent.com/54293593/226208363-5077ca2a-c77e-43f2-a6a6-03275f954e0a.mp4



## Set up and deploy Upwork-Clone

`git clone https://github.com/abdelazizmirasoft/upwork-clone.git upwork-clone`

`cd upwork-clone`

Build the containers:

`./vendor/bin/sail up -d`

Instead of repeatedly typing vendor/bin/sail to execute Sail commands, you may wish to configure a Bash alias that allows you to execute Sail's commands more easily (optional):

`alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`

`sail composer update`

`sail artisan migrate`



