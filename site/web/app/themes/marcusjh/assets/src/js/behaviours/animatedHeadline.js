/* eslint-disable */

import $ from 'jquery'

function animateHeadline() {
// set animation timing
const animationDelay = 2500
// loading bar effect
const barAnimationDelay = 3800
// 3s is the duration of the transition on the loading bar - set in CSS
const barWaiting = barAnimationDelay - 3000
// letters effect
const lettersDelay = 50

function initHeadline() {
// insert <i> element for each letter of a changing word
singleLetters($('.cd-headline.letters').find('b'))
// initialise headline animation
animateHeadline($('.cd-headline'))
}

initHeadline()

function singleLetters($words) {
$words.each(function () {
const word = $(this)
    const letters = word.text().split('');
    const selected = word.hasClass('is-visible')
let i
for (i in letters) {
    if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>'
    letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>'
}
let newLetters = letters.join('')
word.html(newLetters)
})
}

  function animateHeadline($headlines) {
    let duration = animationDelay
    $headlines.each(function() {
    let headline = $(this)
    let spanWrapper = headline.find('.cd-words-wrapper'),
    newWidth = spanWrapper.width() + 5
    spanWrapper.css('width', newWidth)

    if(headline.hasClass('loading-bar')) {
      duration = barAnimationDelay
      spanWrapper.css('width', '')
      setTimeout(function(){ spanWrapper.addClass('is-loading') }, barWaiting)
    }

    //trigger animation
    setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration)
    })
}

function hideWord($word) {
let nextWord = takeNext($word)
if($word.parents('.cd-headline').hasClass('letters')) {
let bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false
hideLetter($word.find('i').eq(0), $word, bool, lettersDelay)
showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay)
} else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
$word.parents('.cd-words-wrapper').removeClass('is-loading')
switchWord($word, nextWord)
setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay)
setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting)
} else {
switchWord($word, nextWord)
setTimeout(function(){ hideWord(nextWord) }, animationDelay)
}
}

function hideLetter($letter, $word, $bool, $duration) {
$letter.removeClass('in').addClass('out')
if(!$letter.is(':last-child')) {
setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration)
} else if($bool) {
setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay)
}
if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
let nextWord = takeNext($word)
switchWord($word, nextWord)
}
}

function showLetter($letter, $word, $bool, $duration) {
$letter.addClass('in').removeClass('out')
if(!$letter.is(':last-child')) {
setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration)
} else {
if(!$bool) { setTimeout(function (){ hideWord($word) }, animationDelay) }
}
}

function takeNext($word) {
return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0)
}


function switchWord($oldWord, $newWord) {
$oldWord.removeClass('is-visible').addClass('is-hidden')
$newWord.removeClass('is-hidden').addClass('is-visible')
}
}

export default animateHeadline
