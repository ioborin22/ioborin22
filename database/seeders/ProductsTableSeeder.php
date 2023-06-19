<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {


        $electronics = ['Smartphone', 'Laptop', 'Headphones', 'Smartwatch', 'Tablet', 'Camera', 'Gaming Console', 'TV', 'Bluetooth Speaker', 'Wireless Earbuds', 'Monitor', 'Printer', 'Router', 'External Hard Drive', 'Projector', 'Fitness Tracker', 'Portable Charger', 'Virtual Reality Headset', 'Action Camera', 'Home Theater System', 'Wireless Mouse', 'Keyboard', 'Smart Home Hub', 'Drone', 'Security Camera', 'Robot Vacuum Cleaner', 'Wireless Earphones', 'Power Bank', 'Digital Camera', 'Wireless Keyboard', 'Bluetooth Earbuds', 'Wireless Gaming Mouse', 'Smart Speaker', 'Graphics Card', 'Bluetooth Headset', 'Wireless Router', 'Smart TV', 'Wireless Mouse and Keyboard Combo', 'External SSD', 'Surround Sound System', 'Video Doorbell', 'Wireless Gaming Controller', 'Mini PC', 'Bluetooth Soundbar', 'Smart Light Bulb', 'Wi-Fi Range Extender', 'Portable Bluetooth Speaker', 'Bluetooth Keyboard', 'Gaming Headset', 'Wireless Gaming Keyboard', 'Wireless Gaming Headset', 'Smart Door Lock', 'Streaming Media Player', 'Wireless Webcam', 'Wireless Adapter', 'Smart Thermostat', 'Bluetooth Gamepad', 'Wireless HDMI Transmitter', 'Smart Plug', 'Bluetooth Mouse', 'Smart Watch', 'Wireless Gaming Mouse and Keyboard Combo', 'Smart Scale', 'Wireless Presenter', 'Gaming Mouse Pad', 'Wireless Charging Pad', 'Bluetooth Receiver', 'Wireless Surround Sound System', 'Portable DVD Player', 'Smart Home Security System', 'Wireless HDMI Adapter', 'Bluetooth Car Kit', 'Wireless Gaming Controller for PC', 'Smart LED Strip Lights', 'Bluetooth FM Transmitter', 'Wireless Barcode Scanner', 'Smart Coffee Maker', 'Wireless Gaming Headset Stand', 'Bluetooth Printer', 'Wireless Gaming Mouse Pad', 'Smart Ceiling Fan', 'Bluetooth Game Controller for Mobile', 'Wireless Barcode Printer', 'Wireless HDMI Cable', 'Smart Lock Box', 'Bluetooth Bike Speaker', 'Wireless Touchpad Keyboard', 'Wireless HDMI Receiver', 'Smart Water Bottle', 'Bluetooth Air Mouse', 'Wireless Barcode Reader', 'Smart Garage Door Opener', 'Bluetooth Bookshelf Speakers', 'Wireless HDMI Splitter', 'Smart Pet Feeder', 'Bluetooth FM Radio', 'Wireless Barcode Scanner for Inventory Management', 'Smart Light Switch', 'Bluetooth Karaoke Microphone', 'Wireless HDMI Extender', 'Smart Air Purifier', 'Bluetooth LED Strip Lights', 'Wireless Barcode Scanner for POS System', 'Smart Video Doorbell', 'Bluetooth Tower Speaker', 'Wireless HDMI Matrix Switcher', 'Smart Robot Vacuum', 'Bluetooth Game Controller for TV'];
        $clothing = ['T-Shirt', 'Jeans', 'Dress', 'Sweater', 'Shoes', 'Jacket', 'Skirt', 'Blouse', 'Pants', 'Coat', 'Shorts', 'Socks', 'Blazer', 'Top', 'Hoodie', 'Leggings', 'Shirt', 'Hat', 'Scarf', 'Boots', 'Suit', 'Cardigan', 'Tank Top', 'Sweatshirt', 'Tie', 'Gloves', 'Pajamas', 'Belt', 'Underwear', 'Swimsuit', 'Polo Shirt', 'Vest', 'Tunic', 'Sunglasses', 'Jumpsuit', 'Sweatpants', 'Cap', 'Shawl', 'Suspenders', 'Robe', 'Trousers', 'Sneakers', 'Duffle Coat', 'Pea Coat', 'Poncho', 'Tuxedo', 'Bow Tie', 'Bracelet', 'Necklace', 'Earrings', 'Ring', 'Watch', 'Ankle Boots', 'Beanie', 'Kimono', 'Sarong', 'Lingerie', 'Tights', 'Hijab', 'Baseball Cap', 'Headband', 'Sun Hat', 'Bikini', 'Bathrobe', 'Overalls', 'Harem Pants', 'Pocket Square', 'Cufflinks', 'Brooch', 'Hair Clip', 'Tie Clip', 'Waistcoat', 'Sleepwear', 'Gown', 'Windbreaker', 'Joggers', 'Slippers', 'Flip Flops', 'Polo', 'Jogging Suit', 'Sweatband', 'Corsage', 'Pashmina', 'Blouse with Bow', 'Tulle Skirt', 'Fedora Hat', 'Suspender Belt', 'Fishnet Stockings', 'Wedding Dress', 'Briefs', 'Bathingsuit', 'Petticoat', 'Arm Warmers', 'Swim Trunks', 'Pocket Watch', 'Choker', 'Tiara', 'Cummerbund', 'Sarafan', 'Jersey', 'Nightgown', 'Tracksuit', 'Sports Bra', 'Bomber Jacket', 'Waist Bag', 'Cargo Pants', 'Bucket Hat', 'Cape', 'Waist Cincher', 'Camisole', 'Bandana'];
        $homeDecor = ['Curtains', 'Rugs', 'Wall Art', 'Candles', 'Decorative Pillows', 'Clock', 'Vase', 'Mirrors', 'Throw Blanket', 'Lamp', 'Picture Frames', 'Plant Stand', 'Coasters', 'Table Runner', 'Sculpture', 'Candle Holders', 'Wreath', 'Wall Shelves', 'Tray', 'Artificial Plants', 'Terrarium', 'Decorative Plates', 'Bookends', 'Ornaments', 'Sconces', 'Tapestry', 'Wall Decals', 'Centerpiece', 'Door Mat', 'Cushions', 'Wall Hooks', 'Hanging Mobile', 'Incense Holder', 'Framed Artwork', 'Throw Pillows', 'Plant Pots', 'Tablecloth', 'Wall Sconces', 'Floor Lamp', 'Curtain Rods', 'Coat Rack', 'Dream Catcher', 'Floating Shelves', 'Desk Organizer', 'Table Lamp', 'Decorative Tray', 'Artificial Flowers', 'Wall Mirrors', 'Drawer Knobs', 'Votive Candle Holders', 'Woven Baskets', 'Terracotta Pots', 'Decorative Bowls', 'Chandelier', 'Tassel Garland', 'Wall Tapestries', 'Hanging Planters', 'Tealight Candle Holders', 'Mantel Clock', 'Accent Chairs', 'Framed Mirrors', 'Wall Clocks', 'Curtain Tiebacks', 'Tassel Pillows', 'Oil Diffuser', 'Wooden Signs', 'Bookshelf', 'Hanging Lanterns', 'Woven Wall Hangings', 'Decorative Ladder', 'Artificial Trees', 'Wall Organizers', 'Napkin Rings', 'Decorative Throws', 'String Lights', 'Beaded Curtains', 'Floor Vases', 'Tabletop Sculptures', 'Window Valances', 'Wall Niches', 'Jewelry Organizers', 'Decorative Screens', 'Tissue Box Covers', 'Hanging Shelves', 'Fireplace Accessories', 'Artificial Wreaths', 'Wall Hangings', 'Wallpaper Borders', 'Terrariums', 'Display Stands', 'Decorative Books', 'Fireplace Screens', 'Window Clings', 'Door Stoppers', 'Stained Glass Panels', 'Decorative Lamps', 'Mosaic Mirrors', 'Curtain Holdbacks', 'Decorative Chains'];
        $beauty = ['Skincare Set', 'Makeup Palette', 'Perfume', 'Hair Dryer', 'Face Mask', 'Nail Polish', 'Brush Set', 'Cleansing Oil', 'Foundation', 'Mascara', 'Curling Iron', 'Sheet Masks', 'Nail Art Kit', 'Eyeshadow Palette', 'Lipstick', 'Hair Straightener', 'Moisturizer', 'Concealer', 'Hair Styling Gel', 'Face Serum', 'Highlighter', 'Hair Curlers', 'Toner', 'Eyeliner', 'Hair Spray', 'Lip Balm', 'Hair Mask', 'Blush', 'Eyebrow Pencil', 'Perfume Set', 'Hair Clippers', 'Face Cleanser', 'Makeup Brushes', 'Hair Extensions', 'Body Lotion', 'False Eyelashes', 'Makeup Remover', 'Hair Volumizer', 'Lip Gloss', 'Heat Protectant Spray', 'Face Scrub', 'Nail Care Kit', 'Contour Kit', 'Dry Shampoo', 'Lip Stain', 'Hair Serum', 'Face Moisturizer', 'Eyelash Curler', 'Setting Spray', 'Cuticle Oil', 'Bronzer', 'Hair Accessories', 'Face Primer', 'Makeup Sponge', 'Hair Gel', 'Sheet Mask Set', 'Nail Art Stickers', 'Eyebrow Gel', 'Body Wash', 'Lip Liner', 'Hair Conditioner', 'Eye Cream', 'Makeup Setting Powder', 'Hair Texturizer', 'Foot Mask', 'Eyeshadow Primer', 'Hair Oil', 'Hand Cream', 'Makeup Setting Spray', 'Hair Dye Kit', 'Body Scrub', 'Makeup Pencil Sharpener', 'Hair Brush', 'Facial Mist', 'Eyeshadow Brush Set', 'Dry Brush', 'Nail Polish Remover', 'Face Mask Brush', 'Hair Detangler', 'Lip Scrub', 'Body Butter', 'Cuticle Cream', 'Makeup Organizer', 'Hair Wax', 'Foot Cream', 'Eyebrow Razor', 'Hair Pomade', 'Body Oil', 'Eyelash Glue', 'Makeup Mirror', 'Leave-In Conditioner', 'Lip Mask', 'Body Spray', 'Makeup Wipes'];
        $books = ['To Kill a Mockingbird', '1984', 'The Great Gatsby', 'Pride and Prejudice', 'The Catcher in the Rye', 'Moby-Dick', 'The Lord of the Rings', 'Jane Eyre', 'The Hobbit', 'Brave New World', 'The Grapes of Wrath', 'Fahrenheit 451', 'The Adventures of Huckleberry Finn', 'The Odyssey', 'Wuthering Heights', 'The Scarlet Letter', 'One Hundred Years of Solitude', 'The Count of Monte Cristo', 'The Picture of Dorian Gray', 'War and Peace', 'Crime and Punishment', 'The Brothers Karamazov', 'Anna Karenina', 'Don Quixote', 'The Divine Comedy', 'Les Misérables', 'The Iliad', 'The Canterbury Tales', 'A Tale of Two Cities', 'The Adventures of Tom Sawyer', 'Gullivers Travels', 'Pride and Prejudice', 'To Kill a Mockingbird', 'Animal Farm', 'The Lord of the Flies', 'The Diary of a Young Girl', 'Lord of the Rings', 'The Hunger Games', 'Harry Potter and the Sorcerers Stone', 'The Chronicles of Narnia', 'The Fault in Our Stars', 'The Da Vinci Code', 'The Girl with the Dragon Tattoo', 'The Alchemist', 'The Kite Runner', 'The Help', 'The Secret Life of Bees', 'The Book Thief', 'Gone with the Wind', 'The Shining', 'The Green Mile', 'The Stand', 'It', 'The Hobbit', 'The Silmarillion', 'The Catcher in the Rye', 'The Great Gatsby', 'The Adventures of Huckleberry Finn', 'The Grapes of Wrath', 'The Old Man and the Sea', 'Of Mice and Men', 'A Farewell to Arms', 'For Whom the Bell Tolls', 'The Sun Also Rises', 'Brave New World', '1984', 'Animal Farm', 'Fahrenheit 451', 'Catch-22', 'Slaughterhouse-Five', 'To the Lighthouse', 'Mrs. Dalloway', 'The Sound and the Fury', 'Invisible Man', 'Beloved', 'The Color Purple', 'Song of Solomon', 'Native Son', 'In Cold Blood', 'On the Road', 'The Grapes of Wrath', 'East of Eden', 'Of Mice and Men', 'Cannery Row', 'Gone with the Wind', 'The Maltese Falcon', 'To Have and Have Not', 'For Whom the Bell Tolls', 'The Snows of Kilimanjaro', 'The Catcher in the Rye', 'Franny and Zooey', 'Raise High the Roof Beam, Carpenters', 'The Heart Is a Lonely Hunter', 'Invisible Man', 'Go Tell It on the Mountain', 'The Catch-22', 'MAS*H', 'The Catcher in the Rye', 'The Godfather', 'The French Lieutenants Woman', 'The Exorcist', 'The Dead Zone', 'Jaws'];
        $sportsOutdoors = ['Tennis Racket', 'Basketball', 'Yoga Mat', 'Running Shoes', 'Dumbbells', 'Golf Clubs', 'Bicycle', 'Football', 'Hiking Boots', 'Swimming Goggles', 'Camping Tent', 'Baseball Glove', 'Soccer Ball', 'Fishing Rod', 'Badminton Set', 'Skateboard', 'Volleyball', 'Hockey Stick', 'Treadmill', 'Jump Rope', 'Paddleboard', 'Tennis Balls', 'Ski Boots', 'Snowboard', 'Bowling Ball', 'Weight Bench', 'Mountain Bike', 'Ping Pong Paddle', 'Golf Balls', 'Darts', 'Hiking Backpack', 'Roller Skates', 'Kayak', 'Soccer Cleats', 'Frisbee', 'Surfboard', 'Archery Bow', 'Boxing Gloves', 'Gymnastics Mat', 'Climbing Harness', 'Water Bottle', 'Snorkel Set', 'Badminton Racket', 'Kettlebell', 'Cycling Helmet', 'Softball Bat', 'Jumping Stilts', 'Tennis Shoes', 'Paddle Tennis Set', 'Ski Goggles', 'Cornhole Set', 'Foam Roller', 'Trekking Poles', 'Beach Umbrella', 'Baseball Bat', 'Golf Bag', 'Paddleboard', 'Hiking Shoes', 'Dive Watch', 'Fishing Tackle Box', 'Bowling Shoes', 'Weighted Vest', 'Mountain Bike Helmet', 'Ping Pong Table', 'Golf Glove', 'Darts Board', 'Climbing Shoes', 'Swimming Cap', 'Cycling Gloves', 'Basketball Hoop', 'Tennis Bag', 'Soccer Goal', 'Volleyball Net', 'Snowboard Boots', 'Skateboard Helmet', 'Hockey Puck', 'Yoga Block', 'Gymnastics Rings', 'Archery Arrows', 'Surfboard Wax', 'Boxing Punching Bag', 'Kettlebell Set', 'Cycling Shorts', 'Golf Tees', 'Paddle Tennis Balls', 'Bowling Pins', 'Cornhole Bags', 'Trekking Backpack', 'Baseball Helmet', 'Snorkel Mask', 'Badminton Shuttlecock', 'Softball Glove', 'Jump Rope', 'Ski Poles', 'Fishing Reel', 'Mountain Bike Pedals', 'Tennis Visor', 'Swimming Fins', 'Climbing Chalk Bag', 'Waterproof Backpack', 'Golf Hat', 'Ping Pong Balls', 'Darts Flights', 'Hiking Hat'];
        $toysGames = ['Board Game', 'Puzzle', 'Action Figure', 'LEGO Set', 'Dollhouse', 'Card Game', 'Remote Control Car', 'Stuffed Animal', 'Building Blocks', 'Chess Set', 'Yo-Yo', 'Bicycle', 'Play-Doh Set', 'Teddy Bear', 'Video Game', 'Jigsaw Puzzle', 'Rubiks Cube', 'Art Set', 'Dress-Up Costume', 'Outdoor Playset', 'Water Gun', 'Marbles', 'Model Kit', 'Trampoline', 'Scooter', 'Toy Kitchen Set', 'RC Drone', 'Kite', 'Toy Train Set', 'Slime Kit', 'Musical Instrument', 'Jumping Rope', 'Basketball Hoop', 'Karaoke Machine', 'Nerf Gun', 'Magic Set', 'Toy Robot', 'Play Tent', 'Frisbee', 'Science Kit', 'Soccer Ball', 'Painting Set', 'Guitar', 'Hula Hoop', 'Pogo Stick', 'Dress-Up Accessories', 'Dart Board', 'Puppet', 'Paddle Ball Set', 'Air Hockey Table', 'Outdoor Swing Set', 'Toy Cash Register', 'Model Car', 'Balloon Animal Kit', 'Kaleidoscope', 'Puzzle Cube', 'Play Food Set', 'Tricycle', 'Water Balloon Set', 'Musical Keyboard', 'Jumping Ball', 'Basketball Set', 'Karaoke Microphone', 'Foosball Table', 'Remote Control Helicopter', 'Building Set', 'Slingshot Toy', 'Toy Drum Set', 'Soccer Goal Set', 'Drawing Tablet', 'Juggling Balls', 'RC Boat', 'Fidget Spinner', 'Pretend Play Tool Set', 'Toy Plane', 'Bubble Machine', 'Doll Stroller', 'Magnetic Building Blocks', 'Puzzle Mat', 'Sand Castle Kit', 'Musical Jewelry Box', 'Jump Rope', 'Basketball Arcade Game', 'Toy Cashier', 'Model Airplane', 'Origami Kit', 'Play Makeup Set', 'Bounce House', 'Toy Guitar', 'Hula Hoop', 'Pogo Ball', 'Dress-Up Shoes', 'Dart Gun Set', 'Hand Puppet', 'Paddle Ball', 'Air Soccer Game', 'Swing Car', 'Toy Doctor Kit', 'Model Ship', 'Silly String', 'Musical Drum', 'Inflatable Pool', 'Magic Wand', 'Toy Vacuum Cleaner', 'Marble Run Set'];
        $healthWellness = ['Vitamin C Supplement', 'Essential Oil Set', 'Yoga Mat', 'Fitness Tracker', 'Resistance Bands', 'Weighted Blanket', 'Aromatherapy Diffuser', 'Foam Roller', 'Massage Gun', 'Protein Powder', 'Herbal Tea Set', 'Sleep Mask', 'Meditation Cushion', 'Acupressure Mat', 'Fitness Jump Rope', 'Water Bottle', 'Back Massager', 'Exercise Ball', 'Handheld Massager', 'Fitness Gloves', 'Electric Toothbrush', 'Plant-Based Protein Bar', 'Scented Candle', 'Fitness Dumbbells', 'Pedometer', 'Fitness Hula Hoop', 'Blood Pressure Monitor', 'Fitness Resistance Tubes', 'Essential Oil Diffuser Bracelet', 'Aloe Vera Gel', 'Epsom Salt', 'Foam Yoga Block', 'Body Fat Scale', 'Ginger Turmeric Supplement', 'Fitness Skipping Rope', 'Lavender Essential Oil', 'Reusable Water Bottle', 'Fitness Kettlebell', 'Aromatherapy Roll-On', 'Weighted Hula Hoop', 'Muscle Roller Stick', 'Digital Thermometer', 'Collagen Powder', 'Eucalyptus Essential Oil', 'Foam Massage Roller', 'Fitness Exercise Bands', 'Fitness Stepper', 'Multivitamin Supplement', 'Fitness Ankle Weights', 'Reusable Silicone Food Storage Bags', 'Fitness Push-Up Bars', 'Resistance Loop Bands', 'Fitness Wrist Weights', 'Fitness Ab Roller', 'Tea Infuser Bottle', 'Hand Grip Strengthener', 'Resistance Band Set', 'Fitness Balance Board', 'Reusable Produce Bags', 'Fitness Toning Sticks', 'Tart Cherry Juice', 'Fitness Slide Board', 'Nasal Inhaler', 'Portable Blender', 'Kombucha Starter Kit', 'Fitness Stability Ball', 'Reusable Silicone Straws', 'Fitness Battle Ropes', 'Protein Shaker Bottle', 'Relaxation Eye Mask', 'Fitness Pilates Ring', 'Reusable Cotton Rounds', 'Vitamin D Supplement', 'Fitness Slam Ball', 'Magnetic Therapy Bracelet', 'Fitness Agility Ladder', 'Reusable Beeswax Wraps', 'Fitness Power Tower', 'Fitness Boxing Gloves', 'Magnetic Posture Corrector', 'Fitness Resistance Bar', 'Reusable Silicone Baking Mats', 'Fitness Sandbag', 'Fitness Treadmill', 'Magnetic Therapy Necklace', 'Fitness Stair Stepper', 'Reusable Coffee Filter', 'Fitness Mini Stepper', 'Fitness Medicine Ball', 'Magnetic Therapy Bracelet', 'Fitness Twist Board', 'Reusable Silicone Stretch Lids', 'Fitness Rowing Machine', 'Fitness Trampoline', 'Magnetic Therapy Bracelet'];
        $kitchenDining = ['Cookware Set', 'Knife Block Set', 'Cutlery Set', 'Dinnerware Set', 'Glassware Set', 'Utensil Set', 'Food Storage Container Set', 'Bakeware Set', 'Mixing Bowl Set', 'Measuring Cup Set', 'Canister Set', 'Salt and Pepper Grinder Set', 'Blender', 'Coffee Maker', 'Toaster', 'Microwave', 'Slow Cooker', 'Air Fryer', 'Food Processor', 'Juicer', 'Stand Mixer', 'Rice Cooker', 'Electric Kettle', 'Pressure Cooker', 'Grill Pan', 'Non-Stick Skillet', 'Cast Iron Dutch Oven', 'Baking Sheet', 'Roasting Pan', 'Saucepan Set', 'Stockpot', 'Wok', 'Chefs Knife', 'Santoku Knife', 'Bread Knife', 'Utility Knife', 'Paring Knife', 'Steak Knife Set', 'Knife Sharpener', 'Cutting Board', 'Meat Thermometer', 'Mixing Spoons', 'Whisk', 'Spatula Set', 'Tongs', 'Can Opener', 'Peeler', 'Grater', 'Colander', 'Strainer', 'Kitchen Scale', 'Timer', 'Oven Mitts', 'Pot Holders', 'Apron', 'Dining Table Set', 'Bar Stools', 'Dining Chair Set', 'Tablecloth', 'Napkins', 'Placemats', 'Salt and Pepper Shakers', 'Napkin Holder', 'Table Runner', 'Drink Coasters', 'Wine Glasses', 'Cocktail Glasses', 'Beer Mugs', 'Coffee Mugs', 'Tea Cups', 'Tumblers', 'Wine Opener', 'Wine Decanter', 'Ice Bucket', 'Cutlery Organizer', 'Drawer Liner', 'Food Storage Bags', 'Food Storage Lids', 'Canister Labels', 'Dish Drying Rack', 'Utensil Holder', 'Spice Rack', 'Kitchen Towels', 'Dish Soap Dispenser', 'Trash Can', 'Recycling Bin', 'Baking Dish', 'Pie Dish', 'Casserole Dish', 'Muffin Pan', 'Cake Pan', 'Cookie Sheet', 'Loaf Pan', 'Pizza Stone', 'Baking Mat', 'Grill Tools Set', 'Barbecue Gloves', 'BBQ Grill Brush', 'Meat Injector', 'Grill Cover', 'Grilling Spatula', 'Grill Tongs', 'Grill Brush', 'Grill Basket', 'Grill Skewers', 'Grill Thermometer', 'Grill Mats', 'Grill Smoker Box', 'Grill Grate Lifter', 'Grill Light', 'Grill Rotisserie', 'Grill Topper', 'Grill Wok'];
        $furniture = ['Sofa', 'Bed', 'Dining Table', 'Coffee Table', 'TV Stand', 'Bookshelf', 'Wardrobe', 'Dresser', 'Nightstand', 'Desk', 'Office Chair', 'Couch', 'Sectional Sofa', 'Recliner', 'Accent Chair', 'Ottoman', 'Console Table', 'End Table', 'Sideboard', 'Cabinet', 'Shelving Unit', 'Bar Stools', 'Bench', 'Rocking Chair', 'Chaise Lounge', 'Futon', 'Pantry', 'Kitchen Island', 'Buffet', 'Credenza', 'Entryway Table', 'Vanity', 'Mirror', 'Headboard', 'Mattress', 'Dining Chair', 'Bar Cart', 'Storage Bench', 'Coat Rack', 'Chest of Drawers', 'TV Mount', 'TV Cabinet', 'Shoe Rack', 'Plant Stand', 'Wall Shelf', 'Folding Table', 'Folding Chair', 'Bean Bag Chair', 'Pouf', 'Floor Lamp', 'Table Lamp', 'Desk Lamp', 'Ceiling Light', 'Chandelier', 'Floor Mirror', 'Room Divider', 'Rug', 'Curtains', 'Blinds', 'Cushions', 'Throw Blanket', 'Pillow', 'Wall Clock', 'Wall Art', 'Decorative Vase', 'Decorative Tray', 'Wall Shelves', 'Desk Organizer', 'Coasters', 'Wall Hooks', 'Wall Decals', 'Candle Holder', 'Picture Frame', 'Desk Accessories Set', 'Floating Shelves', 'Accent Cabinet', 'Corner Shelf', 'Media Console', 'Storage Cabinet', 'Ladder Shelf', 'Nesting Tables', 'Bar Cabinet', 'Drawer Organizer', 'Jewelry Armoire', 'Bathroom Vanity', 'Shower Curtain', 'Bathroom Storage Cabinet', 'Wine Rack', 'Bathroom Mirror', 'TV Tray Set', 'Folding Screen', 'TV Wall Mount', 'Bathroom Shelf', 'Kitchen Cart', 'Wall Sconce', 'Hall Tree', 'Coat Hooks', 'Fireplace Mantel', 'Electric Fireplace', 'Sleeper Sofa', 'Sofa Bed', 'Filing Cabinet', 'Writing Desk', 'Computer Desk', 'Printer Stand', 'File Organizer', 'Standing Desk', 'Wall Desk', 'Console Desk', 'Hutch', 'Gaming Chair'];
        $jewelry = ['Necklace', 'Bracelet', 'Ring', 'Earrings', 'Anklet', 'Choker', 'Pendant', 'Bangle', 'Brooch', 'Cufflinks', 'Watch', 'Chain', 'Pearl Necklace', 'Diamond Ring', 'Gold Bracelet', 'Silver Earrings', 'Gemstone Pendant', 'Hoop Earrings', 'Statement Necklace', 'Cocktail Ring', 'Enamel Bangle', 'Cubic Zirconia Bracelet', 'Dangle Earrings', 'Rose Gold Necklace', 'Birthstone Ring', 'Initial Pendant', 'Tennis Bracelet', 'Stud Earrings', 'Layered Necklace', 'Hamsa Bracelet', 'Statement Earrings', 'Infinity Ring', 'Locket Necklace', 'Cuff Bracelet', 'Drop Earrings', 'Amethyst Pendant', 'Emerald Ring', 'Sapphire Bracelet', 'Topaz Earrings', 'Ruby Necklace', 'Opal Ring', 'Turquoise Bracelet', 'Garnet Earrings', 'Moonstone Pendant', 'Diamond Stud Earrings', 'Crystal Necklace', 'Silver Chain', 'Tungsten Ring', 'Leather Bracelet', 'Hoop Earrings Set', 'Pearl Drop Necklace', 'Rose Gold Bangle', 'Gemstone Ring', 'CZ Stud Earrings', 'Initial Necklace', 'Gold Hoop Earrings', 'Sterling Silver Pendant', 'Diamond Tennis Bracelet', 'Emerald Cut Ring', 'Swarovski Earrings', 'Cross Pendant', 'Beaded Bracelet', 'Charm Necklace', 'Birthstone Earrings', 'Infinity Bracelet', 'Heart Ring', 'Feather Earrings', 'Amethyst Necklace', 'Pearl Stud Earrings', 'Druzy Pendant', 'Opal Bracelet', 'Turquoise Ring', 'Moonstone Earrings', 'Diamond Pendant', 'Crystal Bracelet', 'Silver Hoop Earrings', 'Engraved Necklace', 'Gemstone Bangle', 'Initial Ring', 'Stainless Steel Bracelet', 'Chandelier Earrings', 'Layered Bracelet', 'Bar Necklace', 'Cubic Zirconia Ring', 'Huggie Hoop Earrings', 'Birthstone Pendant', 'Diamond Cluster Ring', 'Lariat Necklace', 'Emerald Pendant', 'Sapphire Ring', 'Topaz Bracelet', 'Amethyst Earrings', 'Rose Gold Stud Earrings', 'Silver Cuff Bracelet', 'CZ Tennis Bracelet', 'Tahitian Pearl Necklace', 'Opal Stud Earrings', 'Turquoise Pendant', 'Garnet Ring', 'Moonstone Bracelet', 'Diamond Cross Pendant', 'Crystal Drop Earrings', 'Pearl Strand Necklace', 'Birthstone Charm Bracelet', 'Enamel Pendant'];
        $automotive = ['Car Battery', 'Tire Pressure Gauge', 'Engine Oil', 'Windshield Wipers', 'Car Wax', 'Car Wash Soap', 'Air Freshener', 'Jumper Cables', 'Seat Covers', 'Floor Mats', 'Car Jack', 'Car Cover', 'Car Polish', 'Car Air Compressor', 'Fuel Injector Cleaner', 'Wheel Brush', 'Car Organizer', 'Car Sun Shade', 'Car Emergency Kit', 'Car Phone Mount', 'Roof Rack', 'Trunk Organizer', 'Car Vacuum Cleaner', 'Car Duster', 'Car Tire Inflator', 'Car Scratch Remover', 'Car Polisher', 'Car Headlight Restoration Kit', 'Car Wash Mitt', 'Car Glass Cleaner', 'Car Tire Shine', 'Car Keychain', 'Car Roof Cargo Box', 'Car Alarm System', 'Car Seat Cushion', 'Car Floor Carpet', 'Car Windshield Repair Kit', 'Car Wheel Cleaner', 'Car Seat Back Organizer', 'Car Upholstery Cleaner', 'Car Detailing Brush', 'Car Seat Protector', 'Car Rim Cleaner', 'Car Window Shade', 'Car Snow Brush', 'Car Jump Starter', 'Car Paint Protection Film', 'Car Battery Charger', 'Car Bug Remover', 'Car Key Fob', 'Car Paint Touch Up Pen', 'Car Seat Gap Filler', 'Car Side Mirror Cover', 'Car Door Edge Guard', 'Car Roof Rack Cross Bars', 'Car Snow Chains', 'Car Seat Heater', 'Car Windshield Sun Shade', 'Car Engine Degreaser', 'Car Horn', 'Car Roof Cargo Bag', 'Car Body Repair Kit', 'Car Tire Gauge', 'Car Seat Belt Extender', 'Car Leather Conditioner', 'Car Hood Scoop', 'Car Roof Spoiler', 'Car Side Window Visor', 'Car Exhaust Tip', 'Car LED Light', 'Car License Plate Frame', 'Car Backup Camera', 'Car Wheel Lock', 'Car Mirror Dash Cam', 'Car Thermostat', 'Car Steering Wheel Cover', 'Car Wheel Spacer', 'Car Roof Mount DVD Player', 'Car Bluetooth Adapter', 'Car Subwoofer', 'Car GPS Tracker', 'Car Radar Detector', 'Car Amplifier', 'Car Tire Valve Caps', 'Car Anti-Theft Lock', 'Car Mud Flaps', 'Car Headrest DVD Player', 'Car Exhaust System', 'Car Transmission Fluid', 'Car Audio Speaker', 'Car Brake Pads', 'Car Shock Absorber', 'Car Radiator', 'Car Oxygen Sensor', 'Car Fuel Filter', 'Car Brake Caliper', 'Car Alternator', 'Car Starter Motor', 'Car Power Steering Pump', 'Car Air Filter', 'Car Serpentine Belt', 'Car Ignition Coil', 'Car Timing Belt', 'Car Suspension Springs', 'Car Thermostat Housing', 'Car Wheel Hub Assembly', 'Car Ball Joint', 'Car Tie Rod End'];

        $categories = [
            'Electronics' => $electronics,
            'Clothing' => $clothing,
            'Home Decor' => $homeDecor,
            'Beauty' => $beauty,
            'Books' => $books,
            'Sports & Outdoors' => $sportsOutdoors,
            'Toys & Games' => $toysGames,
            'Health & Wellness' => $healthWellness,
            'Kitchen & Dining' => $kitchenDining,
            'Furniture' => $furniture,
            'Jewelry' => $jewelry,
            'Automotive' => $automotive
        ];

        $brands = [
            'Electronics' => ['Sony', 'Samsung', 'Apple', 'Microsoft', 'LG', 'Bose', 'Canon', 'DJI', 'Nikon', 'Google'],
            'Clothing' => ['Nike', 'Adidas', 'Zara', 'H&M', 'Gucci', 'Levis', 'Under Armour', 'Puma', 'Forever 21', 'Tommy Hilfiger'],
            'Home Decor' => ['IKEA', 'Pottery Barn', 'West Elm', 'Anthropologie', 'Crate and Barrel', 'Wayfair', 'Urban Outfitters', 'Hobby Lobby', 'HomeGoods', 'Pier 1'],
            'Beauty' => ['LOreal', 'Maybelline', 'MAC Cosmetics', 'Clinique', 'Estee Lauder', 'NARS', 'Olay', 'Neutrogena', 'Sephora', 'Revlon'],
            'Books' => ['Penguin Random House', 'HarperCollins', 'Simon & Schuster', 'Macmillan Publishers', 'Hachette Book Group', 'Scholastic', 'Oxford University Press', 'Pearson Education', 'Wiley', 'Bloomsbury'],
            'Sports & Outdoors' => ['Nike', 'Adidas', 'The North Face', 'Columbia', 'Under Armour', 'Patagonia', 'REI', 'Dick\'s Sporting Goods', 'Academy Sports', 'Puma'],
            'Toys & Games' => ['LEGO', 'Mattel', 'Hasbro', 'Nintendo', 'Playmobil', 'Fisher-Price', 'Melissa & Doug', 'Spin Master', 'Hot Wheels', 'Jenga'],
            'Health & Wellness' => ['Johnson & Johnson', 'Procter & Gamble', 'GSK', 'Pfizer', 'Abbott Laboratories', 'GNC', 'Natures Bounty', 'CVS Health', 'Walgreens', 'Himalaya Herbals'],
            'Kitchen & Dining' => ['KitchenAid', 'Cuisinart', 'Le Creuset', 'Pyrex', 'Calphalon', 'OXO', 'Corelle', 'Hamilton Beach', 'Tupperware', 'All-Clad'],
            'Furniture' => ['IKEA', 'Ashley Furniture', 'Wayfair', 'West Elm', 'Pottery Barn', 'Ethan Allen', 'Crate and Barrel', 'Rooms To Go', 'Bobs Discount Furniture', 'Havertys'],
            'Jewelry' => ['Tiffany & Co.', 'Pandora', 'Cartier', 'Swatch', 'Alex and Ani', 'Chopard', 'Bulgari', 'David Yurman', 'Kay Jewelers', 'Zales'],
            'Automotive' => ['Toyota', 'Ford', 'Chevrolet', 'Honda', 'BMW', 'Mercedes-Benz', 'Tesla', 'Audi', 'Volvo', 'Volkswagen']
        ];

        // Initialize Faker
        $faker = Faker::create();

        // Iterate through categories
        foreach ($categories as $category => $productList) {
            // Get the corresponding category model
            $categoryModel = Category::where('name', $category)->first();
            // Iterate through products in the category
            foreach ($productList as $productName) {
                $description = $faker->sentence();
                $brand = $faker->randomElement($brands[$category]);
                $price = $faker->numberBetween(10, 100);

                Product::create([
                    'name' => $productName,
                    'description' => $description,
                    'brand' => $brand,
                    'price' => $price,
                    'category_id' => $categoryModel->id,
                ]);
            }
        }

    }
}
