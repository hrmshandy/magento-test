The **match** method getting path information from the request object, which is then split into its component parts, which is placed in the `$p` variable.
output of `$path = trim($request->getPathInfo(), '/')` is like this:
```
catalog/category/view/id/15
```
and then this string is split into its competent parts
```
$p = array (
    0 => 'catalog',
    1 => 'category',
    2 => 'view',
    3 => 'id',
    4 => '15',
);
```
from the competent parts, will determine which Magento modules might contain an appropriate controller, determine which controller in that module we should use, determine which action on that controller we should call, and then tell the controller to dispatch that action.
If a suitable module/controller/action is not found, the method returns false and the front controller object moves on to the next router’s match method.
