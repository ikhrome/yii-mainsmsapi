# MainSMS API Yii wrapper
[MainSMS.ru site](http://mainsms.ru)<br>
**Notice**: This extension was created by me for my own usages. I just share my code, but you can improve this extension by fork, if you want. This extension only on GitHub.

## Requirements
PHP >= 5.3.0<br>
cURL

## Installation
Just follow some steps:

### Step 1: Copy
Copy `mainsms` folder to `protected/extensions`:
```bash
cp mainsms your-site-folder/protected/extensions
```
### Step 2: Setup main.php
Add some lines to your `protected/config/main.php` file:
```php
// Application components
components => array(
    ...
    'mainsms' => array(
        'class' =>'ext.mainsms.MainSms'
        'projectName' => 'Your app name',
        'apiKey' => 'your secret api key',
        // optional:
        'useSsl' => false,
        'testMode' => true,
    ),
    ...
)
```
## Step 3: Use it!
After past steps you can use this extension!

### Send sms
```php
Yii::app()->mainsms->api->messageSend(array('9122222222'), 'Hello!\nIt works!', 'Name of your sender');
// you can use shortcut instead of this long line:
Yii::app()->mainsms->send(array('9122222222'), 'Hello!\nIt works!', 'Name of your sender');
```
### Check balance
```php
Yii::app()->mainsms->api->getBalance();
// or use shortcut:
Yii::app()->mainsms->balance();
```

All methods description you can find on [MainSMS official PHP class](http://mainsms.ru/home/integration_php) page.
**Tip** Just use
```php
Yii::app()->mainsms->api->methodName();
```
to call other methods.

# License
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
