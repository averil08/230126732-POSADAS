@echo off
setlocal

:MENU
cls
echo Choose a shape:
echo 1. Circle
echo 2. Triangle
echo 3. Quadrilateral
choice /c 123 /m "Enter your choice:"
if errorlevel 3 goto QUADRILATERAL
if errorlevel 2 goto TRIANGLE
if errorlevel 1 goto CIRCLE

:CIRCLE
set /p CIRCLE_radius=Enter the radius of the circle: 
set /a CIRCLE_area=314*%CIRCLE_radius%*%CIRCLE_radius%/100
echo The area of the circle is %CIRCLE_area% square units.
goto END

:TRIANGLE
set /p TRIANGLE_a=Enter the length of side a: 
set /p TRIANGLE_b=Enter the length of side b: 
set /p TRIANGLE_c=Enter the length of side c: 
rem Check if the sides form a valid triangle
set /a TRIANGLE_sum_ab=%TRIANGLE_a%+%TRIANGLE_b%
set /a TRIANGLE_sum_bc=%TRIANGLE_b%+%TRIANGLE_c%
set /a TRIANGLE_sum_ca=%TRIANGLE_c%+%TRIANGLE_a%

if %TRIANGLE_sum_ab% leq %TRIANGLE_c% (
    echo The lengths do not form a valid triangle.
    goto END
)
if %TRIANGLE_sum_bc% leq %TRIANGLE_a% (
    echo The lengths do not form a valid triangle.
    goto END
)
if %TRIANGLE_sum_ca% leq %TRIANGLE_b% (
    echo The lengths do not form a valid triangle.
    goto END
)

rem Simplified calculation for the area using an approximate method
set /a TRIANGLE_area=(%TRIANGLE_a% * %TRIANGLE_b%) / 2
echo The approximate area of the triangle is %TRIANGLE_area% square units.

rem Determine the type of triangle
if %TRIANGLE_a%==%TRIANGLE_b% if %TRIANGLE_b%==%TRIANGLE_c% (
    echo It is an equilateral triangle.
) else if %TRIANGLE_a%==%TRIANGLE_b% if not %TRIANGLE_b%==%TRIANGLE_c% (
    echo It is an isosceles triangle.
) else if %TRIANGLE_a%==%TRIANGLE_c% if not %TRIANGLE_c%==%TRIANGLE_b% (
    echo It is an isosceles triangle.
) else if %TRIANGLE_b%==%TRIANGLE_c% if not %TRIANGLE_c%==%TRIANGLE_a% (
    echo It is an isosceles triangle.
) else (
    echo It is a scalene triangle.
)
goto END

:QUADRILATERAL
set /p QUADRILATERAL_length=Enter the length: 
set /p QUADRILATERAL_width=Enter the width: 
set /a QUADRILATERAL_area=%QUADRILATERAL_length%*%QUADRILATERAL_width%
echo The area of the quadrilateral is %QUADRILATERAL_area% square units.
if %QUADRILATERAL_length%==%QUADRILATERAL_width% (
    echo It is a square.
) else (
    echo It is a rectangle.
)
goto END

:END
echo Task completed.
pause
