
<form action="src/register.php" method="POST" >
            <div class="block font-medium text-md text-gray-700">
                <label for="name" class="block font-medium text-lg text-gray-700"> name:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="name" placeholder=" Enter your name " ><br>

                <label for="email" class="block font-medium text-lg text-gray-700">  E-mail:</label>
                <input type="text" name="email" placeholder=" Enter your email" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <label for="username" class="block font-medium text-lg text-gray-700"> username:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="username" placeholder=" Enter your username" ><br>

                <label for="name" class="block font-medium text-lg text-gray-700"> password:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="password" placeholder=" Enter your password" ><br>

                <div class="ms-14">
                    <button class="bg-transparent hover:bg-blue-300 text-blue-700 font-medium hover:text-white py-1 px-1 border border-blue-500 hover:border-transparent rounded " onclick="location.href='../register'" type="button">login</button>
                    <button type="submit" class="mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded" id="loginbutton">register</button>
                </div>
            </div>
        </form>