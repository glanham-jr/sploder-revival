# Core Folder

All code within this directory comprises the original vanilla PHP implementation
of the Sploder Revival. The code here was build utilizing a reverse engineering
approach of the original Sploder website, but suffers from comlexity due of
[include-oriented programming](https://kevinsmith.io/modern-php-without-a-framework)
(a great read if you have time), notably tightly coupling code with respect to
a model-view-controller (MVC) paradigm.

Due to the massive complexity of trying to migrate everything from this original
core implementation to have seperation of concerns over MVC and related services,
the files remaining here are a proxy.

The benefit of this piece-wise approach is that we are now able to utilize some
modern capabilities even if the implementation of the HTTP request body is not
always clean separated.
