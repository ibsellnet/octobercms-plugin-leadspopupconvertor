# octobercms-plugin-leadspopupconvertor
An OpenSource plugin for OctoberCMS that helps you generate popups depending on more user's actions.

##### Type of popups you can create
- After some seconds
  + This popup will appear by default after 10 seconds a user stay on a page.
     
     The number of seconds can be changed if you fill in a new value when you create or edit a popup. 
- When the user click a  button
  + This type of popup will appear when the user will click on a button.
      The button must have an identifier like an ID or a CLASS so you can se this up when you create the popup.

- Before user want's to leave the page
  + When the user leave the page or intend to then a popup will appear.
  

# Documentation

#### Installation
- The plugin can be installed from the Marketplace. Please see the details [here](http://octobercms.com/help/site/projects#introduction).  

  **After installation, you will find a menu on the backend named "LeadsPopupConvertor"**

#### USAGE
- Popups menu  
You can create here any popup type you need with your own information
    + NAME: this field is informative for you
    + TYPE: select the type of the popup you want to create
    + CONTENT: editor where you can write anything you need 
    + SECONDS: is used only if you chose the type popup "After some seconds"
    + SELECTOR IDENTIFIER: used only if you choose the type popup "When the user click a  button"

##### LAST UPDATES
###### 2019-10-31
  - on edit a popup you can copy paste directly the code into your page
  - for popup type "after some seconds" the user may change the page but when he came back, of the time is there and he is on that page he will see the popup. This is helpful for big time like: show a popup after one hour (as example)
  - after 2 hours, if the user will come back again on the web he will see again the popups that are set up, otherwise he will see them only once. 
    + Example 1: set up an exit popup, when the user wants firt to go out he will see the popup, if the user open it again and want again to go out he will not see it anymore, only after another 2 hours.
    + Example 2: if you set up a "after some seconds" popup type and you set up 10 seconda. After the user will get th epopup after 10 seconds, he refresh the page and he will not see it again after those 10 seconds, only if he eneterg again after 2 hours.

##### Next version planning
- a new popup type
  + Specify an url special for this popup - not ready - still in development: You can place on top of you link ?popupurl=34
- add forms inside popups

[![Watch the video](https://img.youtube.com/vi/dk82-C0Drzk/0.jpg)](https://ibsell.net/en/plugins/leads-popup-convertor-october-cms-plugin)