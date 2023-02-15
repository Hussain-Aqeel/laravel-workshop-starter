<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert(
            [
                [
                    'name' => 'Buttermilk Pancakes',
                    'description' => 'Buttery, rich and drizzled with real maple syrup, these supremely fluffy pancakes are everything you want them to be and more. You know what, maybe just double this recipe right off the bat, because they’re that good—you’re going to gobble them up for breakfast at home and then you might just want to enjoy them again at dinnertime. The pure, all-American comfort of a freshly-cooked stack of homemade pancakes—it’s a warm and cozy sight, an absolutely heavenly smell and (best of all) one of the most delicious ways to kick off the day. We’re not cutting corners here, so our pancake recipe is designed for perfection over ease. But even the fussiest pancake recipe (and ours is far from the fussiest) is still really quite easy because pancakes are inherently a really easy, humble, forgiving kind of food. Whether you’re on your first cup of coffee or your fourth, we promise you’ll be able to whip up these superb pancakes.',
                    'ingredients' => json_encode([
                        '2 cups all-purpose flour',
                        '2 tsp baking powder',
                        '½ tsp baking soda',
                        '¼ cup granulated sugar',
                        '1 ½ tsp salt',
                        '1 ½ cups buttermilk',
                        '3 large egg, yolks and whites separated',
                        '6 Tbsp unsalted butter, melted plus more for greasing',
                        '2 tsp vanilla extract'
                    ]),
                    'method' => json_encode([
                        'In a large bowl, sift the flour, baking powder, baking soda, sugar and salt into a large bowl.',
                        'In a separate large bowl mix together the buttermilk, egg yolks, melted butter, and vanilla extract until combined. Add the dry ingredients to the bowl and stir until just combined; batter will be slightly lumpy. Do not over mix.',
                        'Place egg whites in a separate mixing bowl. Using an electric mixer, whisk until medium peaks form.',
                        'Gently fold half of the egg whites into batter with a rubber spatula, then gently fold in the remaining whites.',
                        'Heat a griddle or large skillet over medium heat or 350° F. Add a little butter to the hot griddle or pan, once bubbling, add ½ cup pancake batter and let set. When bubbles begin to form, lift with a spatula and flip over. Cook until golden brown on both sides. Continue with remaining batter.',
                        'Serve warm along with favorite toppings.'
                    ]),
                    'image' => '/images/Buttermilk-Pancakes.jpg',
                    'user_id' => 1,
                    'category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Breakfast Quinoa',
                    'description' => 'You people know that we’re breakfast lovers. While we love a great, indulgent brunch as much as the next person, we need a reset now and then, too. Plus, it feels so good to start the day with a super healthy bowl of something steamy and warm. For years, that bowl was full of oatmeal, but lately we’ve been mixing it up with a quinoa breakfast porridge! While a lot of us discovered quinoa as a dinnertime food, maybe as the base for a protein-loaded quinoa bowl or as a healthier stand in for rice, there’s no reason this superfood doesn’t deserve a spot on your breakfast table. Simmered in the non-dairy milk of your choice—we love coconut milk, but almond milk or even hemp milk are all delicious, too—this breakfast quinoa recipe makes for an easy and body-boosting vegan breakfast that warms and nourishes like none other.',
                    'ingredients' => json_encode([
                        '1 cup quinoa, rinsed',
                        '2 cups coconut milk (or any other plant based milk)',
                        '1 tsp cinnamon',
                        'pinch of salt',
                        '2 tsp vanilla',
                        '2 tbsp pure maple syrup',
                    ]),
                    'method' => json_encode([
                        'Using a fine mesh strainer, rinse the quinoa.',
                        'Bring the milk to a boil in a medium sized pot over medium-high heat.',
                        'Add the quinoa and bring back up to a boil. Reduce heat to low, cover with a lid and simmer for 15-20 minutes until most of the milk has been absorbed and the quinoa is tender.',
                        'Stir in the cinnamon, salt, vanilla and maple syrup until fully combined.',
                        'Serve with fresh fruit, toasted nuts or coconut flakes, cream, milk or extra syrup for added sweetness.',
                    ]),
                    'image' => '/images/Breakfast-Quinoa.jpg',
                    'user_id' => 1,
                    'category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Soft-Scrambled Eggs',
                    'description' => 'Ideally served with a big slab of toasted bread and some good, flaky sea salt. If you like your scrambled eggs hard and rubbery, we’re OK with that (kind of), but this recipe probably isn’t for you. This scrambled egg recipe yields the creamiest, fluffiest, most silky eggs your kitchen has ever seen. And while you can add stuff to it—Parmesan, cream cheese, hot sauce, fresh herbs—these soft-scrambled eggs stand alone, as-is, as a stunning testament to the levels of greatness that can be achieved when the simplest of ingredients are paired with just a little bit of culinary technique.',
                    'ingredients' => json_encode([
                        '6 eggs',
                        '½ tsp salt',
                        '3 tbsp unsalted butter',
                        'flaky salt, for serving',
                        'ground pepper, for serving',
                        'fresh herbs of your choice, optional',
                    ]),
                    'method' => json_encode([
                        'In a medium sized bowl beat eggs along with salt until pale yellow, about 30 second.',
                        'In a nonstick skillet melt butter over medium-low heat until it begins to start bubbling.',
                        'Slowly add eggs to the prepared skillet. Immediately begin sliding eggs across the pan using a rubber spatula. Continue to do this until eggs are barely set, about 2 minutes.',
                        'Immediately transfer to plates to avoid over cooking and top with flaky salt and ground pepper.',
                    ]),
                    'image' => '/images/Soft-Scrambled-Eggs.jpg',
                    'user_id' => 1,
                    'category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Nuts & Seeds Granola',
                    'description' => 'Not only is it super good for you, but it’s one of the few breakfast items in the house that the kids will always agree to eat. Plus, once the batch is made, you can have a big ole bowlful on the table in under five minutes. That’s a win we’ll take any day of the week.',
                    'ingredients' => json_encode([
                        '4 cups rolled oats',
                        '2 cups pecans, halves',
                        '¼ cup chia seeds',
                        '1 cup pumpkin seeds',
                        '1 cup slivered almonds',
                        '¼ cup sesame seeds',
                        '1 cup coconut flakes, sweetened or unsweetened',
                        '½ tsp salt',
                        '1 tsp cinnamon',
                        '½ cup coconut oil',
                        '1 tsp vanilla extract',
                        '¼ cup real maple syrup, room temp',
                        '1 large egg white'
                    ]),
                    'method' => json_encode([
                        'Preheat oven to 350°F. Line a small, rimmed baking sheet with parchment paper. Set aside.',
                        'Place rolled oats, pecans, chia seeds, pumpkin seeds, almonds, sesame seeds, coconut, salt and cinnamon in a large mixing bowl. Toss to combine.',
                        'In a separate small, microwave safe bowl, heat the coconut oil until liquified. You may also do this over the stove top using a small sauce or frying pan. Add the maple syrup and vanilla extract to the coconut oil. Pour coconut oil mixture into the oat mixture. Stir until coated evenly.',
                        'In separate small bowl beat the egg white until peaks have formed. Gently fold stiff egg white into the granola.',
                        'Carefully pour granola onto the rimmed baking sheet. Using the flat bottom of a glass cup, gently press granola into a solid, even layer. Bake for 20 minutes. Every oven is different and we recommend gently lifting the edge of the parchment paper ½ and ¾ of the way through to ensure none of the edges are getting too dark.',
                        'Let granola mixture cool for 10 minutes before breaking it apart. Store granola in an airtight container for up to 1 month.'
                    ]),
                    'image' => '/images/nuts-and-seeds-granola.jpg',
                    'user_id' => 2,
                    'category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Grilled Shakshuka Pizza',
                    'description' => 'Shakshuka pizza is not nearly as unusual a combination as it sounds! Think about it—shakshuka and pizza share flavor profiles that are built around the sweet, umami-rich flavor of cooked tomatoes and the contrasting salty, milkiness of cheese (feta and mozzarella, respectively).',
                    'ingredients' => json_encode([
                        '4 tbsp olive oil, divided',
                        '2 Anaheim peppers, roughly chopped or 1 green bell pepper, roughly chopped with one jalapeño pepper seeded, roughly chopped',
                        '1 medium white or yellow onion, roughly chopped',
                        '4 cloves garlic, minced',
                        '1 tsp ground cumin',
                        '1 tsp smoked paprika',
                        '2 tbsp tomato paste',
                        '2 (14.5oz) cans Organic Muir Glen diced tomatoes',
                        '½ tsp sea salt',
                        '1 tsp sugar',
                        '1 lb pizza dough, store-bought or homemade, room temp',
                        '6 oz mozzarella cheese grated',
                        '¾ cup crumbled feta',
                        '4 eggs',
                        'salt',
                        'pepper',
                        '¼ cup flat leaf parsley'
                    ]),
                    'method' => json_encode([
                        'Heat 2 tablespoons olive oil in a 12” skillet over medium high heat. Sauté the peppers and onion, stirring occasionally, until soft, about 8 minutes. Add garlic, and sauté for 2 minutes longer. Add cumin, paprika and tomato paste stir until incorporated. Add 2 cans of Muir Glen Organic Diced Tomatoes, and their liquid to the skillet. Reduce heat to medium, and simmer, stirring occasionally until thickened, about 25-30 minutes. Season with salt and sugar.',
                        'Start up the grill. On a lightly floured surface, roll out pizza dough to ½ inch thickness. Take care that it is stretched out evenly, to prevent any weak spots in your crust. Brush one side of dough with 1 tablespoon of remaining olive oil. Turn heat to medium-high and oil the grill grate. Using a rolling pin, carefully drape the dough on to the grate oiled side down. Grill until slightly puffed and grill marks appear on the underside of the dough, about 3 minutes.',
                        'Using a large metal spatula, loosen and flip dough over onto a lightly floured cookie sheet, so that the grill marks are facing up. Spread the shaksukah tomato sauce over the grilled side of the pizza leaving a 1 inch border. Sprinkle mozzarella evenly over the sauce. Create 4 (4-inch) wells in the cheese and sauce, you want the wells deep enough that the raw eggs don’t spill out of them, but not so deep that the eggs don’t cook evenly or quickly.',
                        'Carefully crack 1 egg into each of the wells. Season with salt and pepper.',
                        'Oil the grate with remaining oil and carefully slide the pizza back onto the grill. Close the grill and cook over medium heat until the underside of the crust is browned and the egg whites are firm, about 5 minutes. If the eggs are too runny for your liking, you can finish the pizza off in the oven at 350° until desired doneness. Transfer pizza to a cutting board and sprinkle with feta cheese and parsley.',
                    ]),
                    'image' => '/images/Grilled-Shakshuka-Pizza.jpg',
                    'user_id' => 3,
                    'category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Baked Chicken Wings',
                    'description' => 'Chicken wings are a real classic. Hard to eat just one, and so satisfying to dip in a variety of sauces. We definitely can’t resist ordering them when we’re out, because who can say no to a plate of deep-fried chicken wings? But once we discovered that they’re so easy (and much better for you than deep frying!) to bake up a batch at home, we make them often for weeknight dinners because they’re not just an appetizer. So whether it’s a Game Day or a Tuesday, there’s no better time to make a big batch of quick bake chicken wings!',
                    'ingredients' => json_encode([
                        '2½ teaspoons kosher salt',
                        '½ teaspoon pepper freshly cracked black',
                        '1½ teaspoons garlic powder',
                        '1½ teaspoons paprika (or smoked paprika)',
                        '¼ teaspoon cayenne',
                        '3 pounds chicken wings or drumettes',
                        '3 tablespoons butter, melted'
                    ]),
                    'method' => json_encode([
                        'Preheat the oven to 425°F with a rack in the center position. Line a rimmed sheet pan with foil and set a cooling rack on top.',
                        'In a large bowl, mix together the salt, pepper, garlic powder, paprika, and cayenne. Add the chicken and toss until they’re fully coated.',
                        'Arrange the chicken wings, skin-sides down, on the cooling rack. Using a pastry brush, brush the wings with half of the melted butter. Flip the wings over and brush with the remaining butter. Bake for 45-50 minutes, or until the chicken is a deep golden-brown and the skin is crispy.',
                    ]),
                    'image' => '/images/BakedChickenWing.jpg',
                    'user_id' => 1,
                    'category_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Fish & Chips',
                    'description' => 'That’s right – a classic British fish and chips recipe! This easy to make at home fish and chips will transport you to the enchanting seaside of Britain with our fresh thick-cut salted chips and flakey beer battered fish, served with malt vinegar and tartar. It’s crispy, light, golden brown, and only the slightest bit greasy (which all good fish and chips should be!). We love it because it’s versatile enough to be a snack for a crowd (think game day!) but a meal for a few.',
                    'ingredients' => json_encode([
                        '3 large russet potatoes (about 3 pounds), scrubbed and cut into ⅓-inch-thick sticks (see Note)',
                        '12 ounces pale ale (or other light beer)',
                        '2 ¼ cups all-purpose flour, divided',
                        '1 teaspoon baking powder',
                        '6 teaspoons sea salt, plus more to taste',
                        '1 teaspoon cayenne',
                        '1 teaspoon garlic powder',
                        'Vegetable oil or refined peanut oil, for frying',
                        '1, 1 ¼ pounds fresh cod, cut into 2-” x 5” inch-thick pieces',
                        'Freshly cracked black pepper',
                        'Malt vinegar, for serving (optional)',
                        'Tartar sauce, for serving (optional)'
                    ]),
                    'method' => json_encode([
                        'Fill a large bowl with ice and water. Add the potatoes to the bowl and soak for 15 minutes.',
                        'Meanwhile, in a medium bowl whisk together the beer, 1 ¼ cups flour, baking powder, and 2 teaspoons salt until smooth. The consistency should be a little runnier than pancake batter.',
                        'In a shallow bowl, combine the remaining 1 cup flour, 3 teaspoons of the salt, cayenne, and garlic powder.',
                        'Heat a 3-inch layer of oil in a large, heavy-bottomed pot or Dutch oven over medium-high heat. Attach a deep-fry thermometer to the side of the pot. Drain the potatoes and pat completely dry. When the oil reaches 300°F, working in batches, carefully add the potatoes to the hot oil, and cook until beginning to soften, 3-4 minutes. Using a slotted metal spoon, transfer the potatoes to a paper-towel-lined sheet pan.',
                        'Increase the heat to high until the oil temperature once again reaches 350°F.',
                        'Season the fish all over with remaining 1 teaspoon salt. Dip each piece of fish into the flour mixture, then dip into the batter, allowing any excess batter to drip off. Carefully add 2-3 pieces of fish into the hot oil. Cook, flipping halfway through, until golden brown, 6-7 minutes. Using a slotted metal spoon, transfer the fish to a paper towel lined plate.',
                        'Working in batches, return the potatoes to the oil and cook until golden brown and crispy, about 5 minutes. Transfer the potatoes to the paper-towel-lined sheet pan.',
                        'Season the fish and chips with salt and pepper to taste. Serve with malt vinegar and tartar sauce on the side.'
                    ]),
                    'image' => '/images/FishandChips.jpg',
                    'user_id' => 1,
                    'category_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Rigatoni with Mushroom Sauce',
                    'description' => 'Calling all mushroom lovers! We’ve got a delicious mushroom sauce and we’ve paired it with pasta for an easy rigatoni recipe, but it also goes great with vegetables, chicken, or sopped up with a hunk of bread. Any way you serve it, this mushroom sauce is a perfect choice for a quick and delicious weeknight dinner. Our recipe for rigatoni with creamy mushroom sauce has become an instant classic rigatoni recipe around our houses, and you\'ll understand why when you make it. We love this rigatoni with mushroom sauce recipe because it is a great way to add another meatless dish to the weeknight dinner repertoire. The white wine, cream, and mushrooms really shine through to make for a memorable meal. Throw in a few fresh herbs and some cream and voila!',
                    'ingredients' => json_encode([
                        '4 tablespoons butter',
                        '2 tablespoons extra-virgin olive oil',
                        '1 pound mushrooms, thinly sliced, such as crimini or baby bella',
                        '4 cloves garlic, minced',
                        '1 cup dry white wine, such as Sauvignon Blanc',
                        '1 cup chicken or vegetable stock',
                        '1 cup heavy cream',
                        '¼ cup freshly grated Parmesan cheese',
                        '1 pound rigatoni pasta, cooked according to instructions, drained',
                        '¼ cup minced chives',
                        '2 tablespoons minced flat leaf parsley',
                        '½ teaspoon kosher salt',
                        '¼ teaspoon freshly cracked black pepper'
                    ]),
                    'method' => json_encode([
                        'Heat the butter and olive oil in a large saucepan over medium high heat. Once the butter is bubbling, add the mushrooms and cook until golden brown, 5-7 minutes. Add the garlic and cook, stirring, until fragrant, about 2 minutes more.',
                        'Stir in the wine and simmer until the wine has reduced by slightly more than half.',
                        'Add the stock and simmer until reduced by half.',
                        'Slowly stir in the cream and Parmesan until combined. Cook until the sauce comes together and thickens enough to coat the back of a wooden spoon, another 2-3 minutes.',
                        'Stir in the pasta, chives, parsley, salt and pepper.'
                    ]),
                    'image' => '/images/RigatoniwithMushroomSauce.jpg',
                    'user_id' => 2,
                    'category_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Classic Creamy Hummus',
                    'description' => 'Everyone loves a giant veggie platter with a generous bowl of hummus at its center, amiright? From Super Bowl parties to afternoon snacks, catered luncheons to last-minute dinner guests, hummus is the workhorse of the dip family. We’ve yet to meet anyone who doesn’t like it, which is saying a lot. But if you think you like hummus now, just wait until you try our recipe for the best homemade hummus out there. It’s a game-changer.',
                    'ingredients' => json_encode([
                        '2 15 oz cans chickpeas, drained with liquid reserved',
                        '¾ cup (or more) reserved chickpea liquid',
                        '⅔ cup tahini',
                        '3 tbsp olive oil + more for serving',
                        '⅓ cup lemon juice',
                        '1 tsp lemon zest (packed)',
                        '2 garlic cloves, peeled',
                        '½ tsp sea salt'
                    ]),
                    'method' => json_encode([
                        'Add all ingredients for the hummus to a high powered blender. A standard blender will not achieve desired consistency. If you do not have a high powered blender a food processor can be used. However, if a food processor is used all chickpea skins will need to be removed or you will end up with dry grainy hummus. (No Good).',
                        'Once all ingredients are added, start to blend on at a low speed until ingredients are mixed together. Slowly increase the speed, and blend on high for 5 minutes until smooth and creamy. You may need to use your tamper. If the hummus appears to be too dry and isn’t blending nicely, add more reserved chickpea liquid 1 tbsp at a time. A little bit will go a long way.',
                        'Every brand of canned chickpeas contains different levels of sodium. Adjust the salt to your liking. If the hummus tastes a little “flat” try adding more salt and a bit more lemon juice and blend again.',
                        'To serve, use the back of a spoon to spread the hummus out into a shallow bowl, drizzle with olive oil and sprinkle with chopped flat leaf parsley, paprika and za’atar. Serve with warm pita and plenty of seasonal vegetables.',
                    ]),
                    'image' => '/images/creamy-classic-hummus.jpg',
                    'user_id' => 2,
                    'category_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Philly Cheesesteak',
                    'description' => 'A dramatic sandwich story is our kind of food soap opera. That’s why the legendary Philly cheesesteak and its debated origins are so fascinating, and why so many have tried to lay claim to this succulent sandwich. Looking through the annals of sandwich history, we discovered that Pat and Harry Olivieri of Philadelphia, Pennsylvania are recognized as the creators of the original philly cheesesteak in the 1930s. Pat Olivieri lends his name to Philly’s well-known cheesesteak emporium, Pat’s King of Steaks. Thanks to the sandwich-making genius of these brothers (who were originally slinging hot dogs!), we’re lucky to be eating the delicious beef, onion, and cheese on a hoagie today. We’re happy to share our recipe to make homemade philly cheesesteak next time you get the craving!',
                    'ingredients' => json_encode([
                        '1 tablespoon vegetable oil',
                        '2 pounds ribeye, fat trimmed, thinly sliced',
                        '2 teaspoons kosher salt',
                        '1 large sweet onion, diced',
                        '4 hoagie rolls, halved lengthwise (don’t cut all the way through)',
                        '4 tablespoons salted butter, softened',
                        '1 garlic clove, grated',
                        '4 tablespoons mayonnaise',
                        '½ teaspoon freshly cracked black pepper',
                        '8 slices sharp or mild provolone cheese'
                    ]),
                    'method' => json_encode([
                        'Preheat the oven to 400°F with a rack in the center position.',
                        'Heat the oil in a large cast iron skillet over high heat. Once the oil is glistening, working in batches, add the beef in a single layer and season with ½ teaspoon of salt. Cook, undisturbed, until meat begins to brown, about 2 minutes. Stir and continue cooking until the beef is cooked through, about 2 minutes more. Using a slotted spoon, transfer the beef to a plate.',
                        'Reduce the heat to medium. Add the onions to the same skillet and season with remaining ½ teaspoon of salt. Cook, stirring often, until browned and softened, 5-8 minutes.',
                        'Meanwhile, in a small bowl, combine mayonnaise and garlic. Spread 1 tablespoon of butter on the cut sides of each hoagie roll. Arrange rolls, cut sides up, on a sheet pan and bake until toasted, about 4 minutes. Remove from the sheet pan from the oven and spread 1 tablespoon of garlic mayo on the cut sides of each roll. Return beef to the skillet with the onions and season with black pepper. Cook, stirring, over medium heat until warmed. Remove the skillet from heat and top the beef mixture with provolone in a single layer.',
                        'Once the cheese begins to melt, divide the cheese and meat between toasted hoagie rolls. Serve immediately.',
                    ]),
                    'image' => '/images/PhillyCheesesteaks.jpg',
                    'user_id' => 1,
                    'category_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Greek Shrimp',
                    'description' => 'This classic Greek dish is bursting with fresh flavor and delivers all of the best parts of the Mediterranean in a one-pan preparation. It’s healthy, easy and satisfying. You’ll sometimes see it called “Shrimp Santornini” or “garides saganaki” which refers to the type of dish (a sagani) the shrimp (garides) are cooked in. It’s the perfect marriage of simple and deeply flavorful, and Greek shrimp pairs well with just about anything.',
                    'ingredients' => json_encode([
                        '4 tablespoons extra-virgin olive oil',
                        '1 pound medium, tail-on, raw shrimp, peeled and deveined, about 25',
                        '2 pints cherry tomatoes',
                        '6 garlic cloves, thinly sliced',
                        '½ teaspoon dried oregano',
                        '½ teaspoon dried thyme',
                        '½ teaspoon garlic powder',
                        '½ teaspoon sugar',
                        '1 teaspoon sea salt',
                        '¼ teaspoon crushed red pepper flakes, plus more for serving',
                        '¼ cup chopped flat leaf parsley',
                        '1 lemon, cut into wedges, for finishing',
                        '2 ounces feta crumbled'
                    ]),
                    'method' => json_encode([
                        'Heat 2 tablespoons of the oil in a large skillet over medium-high heat. Once the oil is glistening, add the shrimp and cook, undisturbed, until just pink on the bottom, about 2 minutes. Flip and cook on the other side until, opaque, and cooked through, about 1 more minute. Using a slotted spoon, transfer the shrimp to a plate.',
                        'Add the remaining 2 tablespoons of oil to the same skillet and turn the heat up to high. Add the cherry tomatoes and cook, undisturbed, until beginning to blister, about 5-7 minutes. Add the garlic and continue cooking, stirring occasionally, until the garlic is tender and the tomatoes begin to burst and the sauce thickens (if you want, you can gently smash the tomatoes with the back of a wooden spoon) about 5 more minutes.',
                        'Add the oregano, thyme, garlic powder, sugar, salt and crushed red pepper flakes and cook, stirring, until fragrant, about 2 minutes.',
                        'Return the shrimp to the skillet with the tomatoes. Stir in the parsley.',
                        'Serve shrimp and tomatoes with a squeeze of lemon, sprinkled with the feta, alongside pita or crusty bread.',
                    ]),
                    'image' => '/images/GreekShrimp.jpg',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Teriyaki Chicken',
                    'description' => 'There’s some dishes that we never imagined we would be able to successfully recreate at home. The juicy, flavorful chicken teriyaki we love ordering out is surprisingly simple and quick to make. The homemade teriyaki sauce is made with a handful of ingredients, and the chicken does not require a marinade to get that restaurant-quality flavor. It’s a quick weeknight dinner that’s as good (we think better!!) as ordering take out.',
                    'ingredients' => json_encode([
                        '2 pounds boneless, skinless chicken breasts or thighs, cut into ¾ -inch pieces',
                        '1 teaspoon kosher salt',
                        '2 tablespoons vegetable oil',
                        '3 tablespoons cornstarch',
                        '1¼ cups cold water',
                        '¾ cup brown sugar',
                        '½ cup soy sauce or tamari',
                        '3 teaspoons honey',
                        '½ teaspoon ground ginger',
                        '½ teaspoon garlic powder',
                        'Cooked rice, for serving',
                        'Sesame seeds, for serving (optional)',
                        'Sliced green onions, for serving (optional)'
                    ]),
                    'method' => json_encode([
                        'Sprinkle the chicken all over with the salt. Heat the vegetable oil in a large saucepan over medium-high heat. Once the oil is glistening, add the chicken and cook, undisturbed, until browned, 3-4 minutes per side.',
                        'Meanwhile, in a medium bowl, combine the cornstarch with the water. Whisk in the brown sugar, soy sauce, honey, ginger, and garlic powder.',
                        'Once the chicken is done, add the sauce to the pan and bring the sauce to a simmer over medium-high heat. Reduce the heat to medium and cook until the chicken is cooked through and the sauce has thickened enough to coat the back of a spoon, about 5 minutes. The sauce will continue to thicken as it cools.',
                        'Divide rice between bowls and top with the chicken and sauce from the pan. Sprinkle with sesame seeds and green onions, if using, before serving.',
                    ]),
                    'image' => '/images/TeriyakiChicken.jpg',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Beef Tenderloin',
                    'description' => 'This beef tenderloin roast hits all the check marks of easy to make, impressive to serve, and melt-in-your-mouth delicious, no fancy carving skills needed. It’s great for a small crowd of close friends or family. The horseradish sauce and garlic herb butter complement the tender beef, leaving room for the flavor to really shine through. The best way to cook beef tenderloin is a hard sear in the pan followed by a slow roast for a nicely browned crusty exterior and soft, fork-tender interior.',
                    'ingredients' => json_encode([
                        '½ cup heavy whipping cream, chilled',
                        '½ cup sour cream',
                        '¼ cup mayonnaise',
                        '3 to 6 tablespoons horseradish sauce',
                        '2 tablespoons minced chives',
                        '½ teaspoon sea salt',
                        '6 tablespoons salted butter, softened',
                        '4 garlic cloves, grated',
                        '2 teaspoons finely chopped, fresh thyme',
                        '2 teaspoons finely chopped, fresh rosemary',
                        '2 teaspoons finely chopped, fresh sage',
                        '1 (4 to 4½-pound) center-cut beef tenderloin roast, fat trimmed and tied, at room temperature',
                        '1 tablespoon kosher salt',
                        '2 teaspoons freshly cracked black pepper',
                        '2 tablespoons vegetable oil'
                    ]),
                    'method' => json_encode([
                        'Preheat the oven to 425°F with a rack in the center position.',
                        'Make the horseradish sauce. In a small bowl, whisk the cream until soft peaks form. Gently fold in the sour cream, mayonnaise, horseradish sauce, chives, and salt. Cover and place in the refrigerator until ready to use. Store refrigerated in an airtight container for up to one week.',
                        'Make the garlic herb butter. In a separate small bowl combine the butter, garlic, thyme, rosemary, and sage. Store refrigerated in an airtight container for up to one week.',
                        'Make the beef tenderloin. Halve the tenderloin and tie it up using kitchen twine. Pat the beef dry and season all over with salt and pepper.',
                        'Heat the oil in a large oven-proof skillet over high heat. Once the oil is glistening, add the tenderloin and brown on all sides, 10-12 minutes. Cover the tenderloin with the garlic herb butter and bake until the internal temperature reaches 135°F for medium-rare, 15-25 minutes.',
                        'Remove from the oven and transfer the tenderloin to a cutting board. Let rest for 15 minutes.',
                        'Cut tenderloin into 1-inch slices and serve with horseradish sauce.'
                    ]),
                    'image' => '/images/BeefTenderloin.jpg',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Shepherd’s Pie',
                    'description' => 'You don’t have to go all the way to England for this comforting pub favorite. We’ve got the inside scoop on how to make an old fashioned shepherd\'s pie recipe at home. It’s a straightforward meat and potatoes meal, with some vegetables and seasonings, that will warm the belly on the coldest of nights. If you don’t finish it all in one sitting, the leftovers are just as good the next day!',
                    'ingredients' => json_encode([
                        '4 teaspoons kosher salt',
                        '3 pounds russet potatoes, peeled and cut into 2-inch cubes',
                        '1 cup (2 sticks) unsalted butter, softened',
                        '1 cup whole milk',
                        '1 teaspoon garlic powder',
                        '½ teaspoon freshly cracked black pepper',
                        '2 tablespoons extra-virgin olive oil',
                        '2 pounds 90/10 ground beef or ground lamb',
                        '1 ½ teaspoons kosher salt',
                        '1 cup finely chopped onion',
                        '2 large carrots, peeled and finely diced',
                        '1 cup finely chopped fennel',
                        '2 garlic cloves, minced',
                        '2 tablespoons all-purpose or gluten-free flour',
                        '2 tablespoons tomato paste',
                        '2 cups beef broth or stock',
                        '½ teaspoon freshly cracked black pepper, plus more for serving',
                        '1 teaspoon finely chopped fresh thyme, plus more for serving',
                        '1 teaspoon finely chopped fresh rosemary',
                        '1 cup frozen peas'
                    ]),
                    'method' => json_encode([
                        'Preheat the oven to 400°F with a rack in the center position.',
                        'Fill a large pot with water and 3 teaspoons of the salt. Add the potatoes and bring to a boil over high heat. Cook until fork tender, about 15 minutes. Drain and set aside.',
                        'In the same pot, combine the butter and milk over medium-low heat. Cook, stirring, until the butter is melted, about 2 minutes. Using a potato ricer, rice the potatoes over the hot butter mixture. (Alternatively, mash the potatoes directly into the liquid, taking care not to overwork them.) Season with the garlic powder, pepper and the remaining 1 teaspoon salt.',
                        'Heat 1 tablespoon of the olive oil in a large skillet over medium-high heat. Once the oil is glistening, add the ground beef and season with 1 teaspoon of the salt. Cook, undisturbed, until browned, about 5 minutes. Using a wooden spoon, break up the meat and continue cooking until cooked through, about 5 minutes more. Drain any excess grease and transfer to a plate.',
                        'Reduce the heat under the same skillet to medium and add remaining tablespoon of olive oil, onions, carrots, and fennel. Season with remaining ½ teaspoon of salt and cook, stirring often, until vegetables are softened, about 5-7 minutes. Add the garlic and cook until fragrant, about 2 more minutes more.',
                        'Add the flour and tomato paste and cook, stirring continuously, until tomato paste has darkened, about 1 minute. Slowly stir in beef stock, pepper, thyme, and rosemary and bring to a simmer. Add the browned beef and any collected juices and frozen peas and simmer, stirring occasionally until sauce has thickened and liquid is mostly absorbed, about 10 minutes.',
                        'Transfer the filling to a 9x13-inch baking dish and spread out evenly. Top with mashed potatoes, and smooth out into an even layer using the back of a spoon. Bake until the filling is bubbling and potatoes are golden brown, about 20 minutes.',
                        'Top with freshly cracked pepper and fresh thyme and let cool for 15 minutes before serving.'
                    ]),
                    'image' => '/images/ShepherdsPie.jpg',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Parmesan Risotto',
                    'description' => 'We’ve got an easy Parmesan risotto recipe that you can add to your weeknight repertoire, subbing it in when you’re craving a rich and creamy side dish. We love to make this Parmesan risotto with lemon and garlic and serve it along with our One-Pot Braised Chicken with Kale and White Beans, Fish Puttanesca, or cook up a few vegetables like Perfectly Roasted Broccoli, and Roasted Mushrooms and serve everything into a bowl for a satisfying vegetarian meal. It requires just a handful of ingredients, and a little time to make this cozy Parmesan risotto recipe. If you’d like the risotto to be the star of the show, you could top it with a Poached Egg, and serve a Simple Butter Lettuce Salad on the side. Don’t forget the wine! We recommend a dry white wine (one that you might like to drink with your meal!), like sauvignon blanc or chardonnay.',
                    'ingredients' => json_encode([
                        '5 cups chicken or vegetable stock',
                        '8 tablespoons salted butter',
                        '1 large shallot, finely diced',
                        '4 garlic cloves, minced',
                        '1½ cups arborio rice',
                        '¾ cup dry white wine',
                        '1 teaspoon lemon zest',
                        '1 tablespoon freshly squeezed lemon juice',
                        '½ cup heavy cream',
                        '2 cups freshly grated Parmesan cheese, plus more for serving',
                        '2 teaspoons kosher salt',
                        '1 teaspoon freshly cracked black pepper, plus more for serving'
                    ]),
                    'method' => json_encode([
                        'Add the stock to a small saucepan and heat over medium low.',
                        'In a large saucepan or Dutch oven, melt 4 tablespoons of the butter over medium heat. Add the shallots and cook until translucent, about 3 minutes. Add the garlic and rice and cook, stirring frequently, until garlic is fragrant and rice is evenly coated, 3 to 4 minutes more.',
                        'Add the wine, lemon zest, and lemon juice and bring to a simmer, stirring constantly, until the liquid is absorbed, about 5 minutes. Add 1 cup of warm broth and cook, stirring constantly, until broth is absorbed, about 5 minutes. Repeat with remaining stock, 1 cup at a time, until mostly absorbed, 20 to 25 minutes more.',
                        'Reduce the heat to low and stir in the heavy cream, remaining 4 tablespoons of butter, parmesan, salt, and pepper, until fully incorporated and the cheese has melted, about 5 minutes.',
                        'Divide risotto between bowls and top with more pepper and parmesan if desired. Serve immediately.',
                    ]),
                    'image' => '/images/ParmesanRisotto.jpg',
                    'user_id' => 1,
                    'category_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Banana Bread',
                    'description' => 'Sweet and comforting with just the right hint of “hey, maybe loaf cake is a healthy snack!” This classic banana bread recipe is as homey and wonderful as can be. Full disclosure, we first came across it on allrecipes, and fell in love. It’s so heavy on the bananas—2 ⅓ whole cups of bananas in one loaf of banana bread. Lots of overripe bananas—combined with plenty of butter—ensures a nice, tender, moist banana bread! And while we love this banana bread recipe in its own right, we also couldn’t resist dressing it up just a bit, because we love that extra dose of moisture and richness. If you’re feeling adventurous, this brilliantly simple maple-sweetened mascarpone is banana bread\'s perfect compliment.',
                    'ingredients' => json_encode([
                        '½ (1 stick) cup butter, plus more for greasing pan',
                        '2 cups all-purpose flour, plus more for dusting',
                        '1 teaspoon baking soda',
                        '¼ teaspoon sea salt',
                        '¾ cup brown sugar',
                        '2 eggs, beaten',
                        '2 ⅓ cups mashed overripe bananas',
                        'Thinly sliced banana, optional',
                        '¼ cup granulated sugar',
                        '8 ounces mascarpone',
                        '2 tablespoons maple syrup, plus more for serving'
                    ]),
                    'method' => json_encode([
                        'Preheat the oven to 350°F. Grease a 9 x 5-inch loaf pan with butter and dust with flour.',
                        'In a mixing bowl, combine flour, baking soda, and salt.',
                        'In the bowl of a stand mixer, cream the butter and brown sugar until fluffy. Stir in the eggs and mashed bananas until well incorporated.',
                        'To the bowl with the banana mixture, stir in the flour mixture until just moistened. Transfer the batter to the prepared pan. Top with thinly sliced banana pieces and sprinkle evenly with granulated sugar.',
                        'Bake for 60 to 65 minutes, or until a toothpick inserted into the center of the loaf comes out clean. Let the bread cool in the pan for 10 minutes, then turn out onto a wire rack.',
                        'In a small bowl, combine the mascarpone and maple syrup.',
                        'To serve, cut the bread into slices. Spread each slice with 2 tablespoons maple mascarpone and drizzle with extra maple syrup.'
                    ]),
                    'image' => '/images/BananaBread.jpg',
                    'user_id' => 1,
                    'category_id' => 4,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Focaccia bread',
                    'description' => 'Focaccia bread is having as much of a moment as sourdough, and rightly so! This olive oil-enriched, yeasted bread, dusted with flaky salt and baked to golden perfection is so easy to make, it almost feels like cheating. Our focaccia recipe is easy enough for even the most nervous bread-baking beginners—promise!—and the bread that it yields is just so, so good. Rich, tender, fluffy perfection. No store-bought bread will ever compare to the way that bread made by your own two hands will taste. There’s a special magic about homemade bread, and focaccia is one of the very easiest to master. Focaccia goes with everything, too. Homemade focaccia turns even the most basic meal into a special event. Serve your warm-from-the-oven focaccia alongside a simple salad and call it a light summer dinner, or with big bowls of pasta and plenty of good wine for a true Italian countryside feast. You can even use leftovers the next day as the world’s greatest sandwich bread if you have any leftovers (which we never do.)',
                    'ingredients' => json_encode([
                        '1 (.25 oz) pack instant yeast (about 2 1/4 tsp)',
                        '1 ¾ cup warm water (110°F to 115°F)',
                        '4 cups all-purpose flour, plus more for kneading',
                        '2 tsp kosher salt',
                        '8 Tbsp extra-virgin olive oil, plus more for greasing',
                        'flaky salt for serving'
                    ]),
                    'method' => json_encode([
                        'In a small bowl, sprinkle the yeast over the warm water. Whisk briefly, then set aside to proof for 5 to 10 minutes.',
                        'In a large bowl, whisk together the flour and salt. Add the bubbly yeast water to the flour and using your hands or a spatula mix until a shaggy dough forms. Set aside for 10 minutes.',
                        'Grease a second large bowl with 3 tablespoons of olive oil. Turn the dough out onto a floured surface. Knead the dough with floured hands until smooth, about 10 minutes. Form the dough into a ball, place it in the oiled bowl, cover with a kitchen towel, and set aside for 2 hours, until it has doubled in size.',
                        'Grease a 9x13-inch baking pan with 3 tablespoons of oil. Transfer the dough to the prepared pan. Lightly oil your fingertips. Using your fingers, press firmly into the focaccia all over, making dimples as you go, stretching it to the corners of the pan. Let rise, uncovered, in a dry, warm spot for 30-60 more minutes.',
                        'Place a rack in middle of oven; preheat to 450°F. Carefully drizzle the focaccia with the remaining 2 tablespoons olive oil and sprinkle it all over with flaky sea salt. Bake focaccia until puffed and lightly golden brown all over, 25–30 minutes.',
                    ]),
                    'image' => '/images/focaccia.jpeg',
                    'user_id' => 2,
                    'category_id' => 4,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Salty Dark and Milk Chocolate Skillet Cookie',
                    'description' => 'Look, there’s nothing wrong with a great grilled cheese. And who doesn’t love scrambled eggs? But when it comes to true greatness, as far as we’re concerned, this skillet chocolate chip cookie recipe is far and away the best thing you could ever hope to make with your trusty cast-iron skillet. It’s absolutely packed to the brim with chocolate—both milk chocolate AND dark chocolate, please and thank you—and it’s buttery, dough-y, and kissed with just a sprinkle of salt to balance out all that sweetness. It’s utter perfection—a skillet cookie lovers dream.',
                    'ingredients' => json_encode([
                        '8 tbsp butter, melted',
                        '½ cup brown sugar, packed',
                        '¼ cup sugar',
                        '1 egg',
                        '1 tsp vanilla',
                        '1¼ cup flour',
                        '½ tsp baking soda',
                        '½ tsp salt',
                        '2 oz milk chocolate, finely chopped',
                        '½ cup dark chocolate chunks',
                        'vanilla ice cream',
                        'Maldon salt',
                        'extra chocolate shavings'
                    ]),
                    'method' => json_encode([
                        'Heat oven to 350°F.',
                        'In a mixing bowl combine the melted butter and both sugars. Stir until fully incorporated.',
                        'Mix in egg and vanilla.',
                        'Add the flour, baking soda and salt to the bowl. Stir until a dough forms and no dry bits remain.',
                        'Stir in both chocolates.',
                        'Press dough into a lightly greased 8” or 10” cast iron skillet.',
                        'Bake until center is firm, but still a bit gooey 18-20 minutes. Remove from oven and cool slightly.',
                        'Top with ice cream and flakey sea salt and enjoy!'
                    ]),
                    'image' => '/images/Salty-Dark-and-Milk-Chocolate-Skillet-Cookie.jpg',
                    'user_id' => 3,
                    'category_id' => 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Tiramisu',
                    'description' => 'We heard the 90s are in again, and we’re bringing the classic tiramisu recipe back to celebrate, baby. Remember the scene from Sleepless in Seattle when Tom Hanks is thinking about dating again and Rob Reiner’s primary advice revolves around the fact that to get a girl, he’s going to have to learn about tiramisu? That’s how iconic tiramisu was in the early 90s—Nora Ephron built a whole moment around it in her (arguably) best movie ever! And while shoulder pads and taupe everything can stay firmly in 1992, it’s time for us to make some room for tiramisu in our hearts once again, because this creamy, textural, coffee-drenched dessert is seriously delicious! Plus, with our pared down, super easy tiramisu recipe, it’s a dessert you can make almost any time the craving strikes.',
                    'ingredients' => json_encode([
                        '1 cup heavy whipping cream',
                        '1 cup mascarpone, room temperature',
                        '¼ cup pure maple syrup',
                        '1½ teaspoon ground cinnamon',
                        '1 teaspoon vanilla extract',
                        '2 cups very strong coffee',
                        '1 (7 ounce) package ladyfingers',
                        '2 tablespoons cocoa powder'
                    ]),
                    'method' => json_encode([
                        'In the bowl of a stand mixer fitted with the whisk attachment, whip the cream until stiff peaks form.',
                        'In a medium bowl, mix the mascarpone, maple syrup, 1 teaspoon cinnamon, and vanilla until fully combined. Fold in the whipped cream until smooth.',
                        'Add the coffee to a shallow bowl or pie plate. Quickly dip each ladyfinger into the coffee, being careful not to soak it, and add to a 9×9-inch baking dish in a single layer (you’ll use half the ladyfingers).',
                        'Spread half of the whipped cream mixture over the ladyfingers. Repeat with the remaining coffee, ladyfingers, and whipped cream mixture. Cover with plastic wrap and chill in the refrigerator for at least 4 hours or overnight.',
                        'Dust with cocoa powder and remaining cinnamon before serving.'
                    ]),
                    'image' => '/images/Homemade-Tiramisu-Recipe.jpg',
                    'user_id' => 5,
                    'category_id' => 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Coffee Cinnamon Rolls with Maple Cream Cheese Icing',
                    'description' => 'We’ve taken everything you love about weekend brunch and rolled it all into one unique, sweet and sticky grown-up cinnamon roll! It’s the perfect combination of tender dough, maple and cream cheese, and coffee. Yes, you heard that correctly. We’ve added freshly-ground coffee beans straight into the cinnamon and sugar filling of these cinnamon rolls for a perfectly subtle and intriguing hint of coffee flavor right inside. In other words, yes, you’ll want to keep the kids AWAY from these cinnamon rolls. What better excuse to keep them all to yourself?',
                    'ingredients' => json_encode([
                        '2 cups whole milk',
                        '1/2 cup vegetable oil',
                        '1/2 cup sugar',
                        '1 package active dry yeast',
                        '4 1/2 cups all-purpose flour, divided',
                        '1/2 tsp baking powder',
                        '1/2 tsp baking soda',
                        '1 1/2 tsp salt',
                        '1 cup butter, very soft, not quite melted',
                        '1 cup sugar',
                        '2 tbsp cinnamon',
                        '2 tbsp fresh coffee grounds',
                        '1 (8 oz.) cream cheese',
                        '2 1/2 cups powdered sugar',
                        '1/4 cup milk',
                        '3 tbsp butter, melted',
                        '1/2 tsp salt',
                        '1 1/2 tsp maple extract'
                    ]),
                    'method' => json_encode([
                        'Heat the milk, vegetable oil, and sugar in a medium saucepan over medium heat; do not allow the mixture to boil. Set aside and cool. When mixture has cooled to 100-110°F., sprinkle the yeast on top and let it sit on the milk for 2 minutes.',
                        'Add 4 cups of the flour. Stir until just combined, cover with a clean kitchen towel, and set aside in a relatively warm place for an hour.',
                        'Remove the towel and add the baking powder, baking soda, salt and remaining ½ cup of flour. Stir thoroughly to combine.',
                        'Remove the dough from the pan or mixing bowl. On a floured baking surface, roll the dough into a large rectangle, about 30 x 10 inches.',
                        'Spread the butter evenly over the surface of the dough. Sprinkle the sugar, cinnamon and coffee grounds evenly over the butter.',
                        'Beginning at the end farthest from you, roll the rectangle tightly toward you. Use both hands and work slowly, being carful to keep the roll tight. When you reach the end, pinch the seam together. On a cutting board, using a sharp knife, make 12 rolls.',
                        'Place the sliced rolls into a greased 9X13 baking pan.',
                        'Preheat oven to 375° F. Cover rolls with a kitchen towel and set aside to rise on the countertop for at least 20 minutes before baking. Remove the towel and bake for 15-20 minutes, until golden brown. Don’t let the rolls get overly brown.',
                        'In a large bowl, using a hand mixer or stand mixer, blend together the cream cheese, powdered sugar, milk, butter, salt and maple flavoring. Taste and add in more maple, sugar, butter or milk as needed until the icing reaches the desired consistency.',
                        'After the rolls are finished baking, and still warm, generously coast them with the frosting.'
                    ]),
                    'image' => '/images/Coffee-Cinnamon-Rolls-with-Maple-Cream-Cheese-Icing.jpg',
                    'user_id' => 5,
                    'category_id' => 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
