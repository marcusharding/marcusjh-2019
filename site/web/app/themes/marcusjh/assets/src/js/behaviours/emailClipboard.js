/* eslint-disable */

import $ from 'jquery'

function emailClipboard() {
// Add class to mailto link
// Needed to separate the disabling of the default action AND copy email to clipboard

const mailto = $('.mailto-link')
const messageCopy = ''
const messageSuccess = 'Email address copied to clipboard'

$('a[href^=mailto]').addClass('mailto-link')

mailto.append('<span class="mailto-message"></span>')
$('.mailto-message').append(messageCopy)

// Disable default action (opening your email client. yuk.)
$('a[href^=mailto]').click(function() {
  return false
})

// On click, get href and remove 'mailto:'
// Store email address in a variable.
mailto.click(function() {
  var href = $(this).attr('href')
  var email = href.replace('mailto:', '')
  copyToClipboard(email)
  $('.mailto-message').empty().append(messageSuccess)
  setTimeout(function() {
    $('.mailto-message').empty().append(messageCopy);}, 2000)
});


// Grabbed this from Stack Overflow.
// Copies the email variable to clipboard
function copyToClipboard(text) {
    const dummy = document.createElement('input')
    document.body.appendChild(dummy)
    dummy.setAttribute('value', text)
    dummy.select()
    document.execCommand('copy')
    document.body.removeChild(dummy)
}
}


export default emailClipboard
