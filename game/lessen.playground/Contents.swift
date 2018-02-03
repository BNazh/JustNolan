//
//print("Hello world");
//var name="Nazhmeddin"
//var age=18
//var weigth=65
//
//print("Name is \(name)")
//print("Age is \(age)")
//print("Ves is \(weigth)")
//print(9 % 4 )
//print(-9 % 4)
//let name1 = "world"
//if name1 == "world" {
//    print("hello, world")
//} else {
//    print("I'm sorry \(name), but I don't recognize you")
//}
//
//(1, "zebra") < (2, "apple")   // true because 1 is less than 2; "zebra" and "apple" are not compared
//(3, "apple") < (3, "bird")    // true because 3 is equal to 3, and "apple" is less than "bird"
//(4, "dog") == (4, "dog")      // true because 4 is equal to 4, and "dog" is equal to "dog"
//
//for index in 1...5 {
//    print("\(index) times 5 is \(index * 5)")
//}
//
//let names = ["Anna", "Alex", "Brian", "Jack"]
//let count = names.count
//for i in 0..<count {
//    print("Person \(i + 1) is called \(names[i])")
//}

//for name in names[0...] {
//    print(name)
//}

//for name in names[...2] {
//    print(name)
//}

//let range = ...5
//print(range.contains(7))   // false
//print(range.contains(4))  // true
//print(range.contains(-1))  // true
//
//let allowedEntry = false
//if !allowedEntry {
//    print("ACCESS DENIED")
//}
//
//
//
//let hasDoorKey = false
//let knowsOverridePassword = true
//if hasDoorKey || knowsOverridePassword {
//    print("Welcome!")
//} else {
//    print("ACCESS DENIED")
//}
//
//let wiseWords = "\"Imagination is more important than knowledge\" - Einstein"
//// "Imagination is more important than knowledge" - Einstein
//let dollarSign = "\u{24}"        // $,  Unicode scalar U+0024
//let blackHeart = "\u{2665}"      // ♥,  Unicode scalar U+2665
//let sparklingHeart = "\u{1F496}" // 💖, Unicode scalar U+1F496
//
//print(dollarSign)
//print(blackHeart)
//print(sparklingHeart)
//print("\u{1F500}")
//
//let threeDoubleQuotes = """
//Escaping the first quote \"""
//Escaping all three quotes \"\"\"
//"""
//print(threeDoubleQuotes)
//
//var emptyString = ""               // empty string literal
//var anotherEmptyString = String()  // initializer syntax
//// these two strings are both empty, and are equivalent to each other
//if emptyString.isEmpty {
//    print("Nothing to see here")
//}

//
//var variableString = "Horse"
//variableString += " and carriage"
//// variableString is now "Horse and carriage"
//
//var constantString = "Highlander"
//constantString += " and another Highlander"
//print(constantString)
//// this reports a compile-time error - a constant string cannot be modified
//
//for character in "Dog!🐶" {
//    print(character)
//}
//let catCharacters: [Character] = ["C", "a", "t", "!", "🐱"]
//let catString = String(catCharacters)
//print(catString)
//
//let string1 = "hello"
//let string2 = " there"
//var welcome = string1 + string2
////print(welcome)
//let exclamationMark: Character = "!"
//welcome.append(exclamationMark)
//print(welcome)
//
//let badStart = """
//one
//two
//"""
//let end = """
//three
//"""
//print(badStart + end)
//// Prints two lines:
//// one
//// twothree
//
//let goodStart = """
//one
//two
//
//"""
//print(goodStart + end)
//
//let regionalIndicatorForUS: Character = "\u{1F1FA}\u{1F1F8}"
//print(regionalIndicatorForUS)
//
//let unusualMenagerie = "Koala 🐨, Snail 🐌, Penguin 🐧, Dromedary 🐪"
//print("unusualMenagerie has \(unusualMenagerie.count) characters")
//
//
//
//
//var word = "cafe"
//print("the number of characters in \(word) is \(word.count)")
//// Prints "the number of characters in cafe is 4"
//
//word += "\u{301}"    // COMBINING ACUTE ACCENT, U+0301
//
//print("the number of characters in \(word) is \(word.count)")
//// Prints "the number of characters in café is 4"
//
//let greeting = "Guten Tag!"
//greeting[greeting.startIndex]
//// G
//greeting[greeting.index(before: greeting.endIndex)]
//// !
//greeting[greeting.index(after: greeting.startIndex)]
//// u
//let index = greeting.index(greeting.startIndex, offsetBy: 7)
//greeting[index]
//// a
//
//
//for index in greeting.indices {
//    print("\(greeting[index]) ", terminator: "")
//}

//var welcome = "hello"
//welcome.insert("!", at: welcome.endIndex)
//// welcome now equals "hello!"
//
//welcome.insert(contentsOf: " there", at: welcome.index(before: welcome.endIndex))
//// welcome now equals "hello there!"
//
//welcome.remove(at: welcome.index(before: welcome.endIndex))
//// welcome now equals "hello there"
//
//let range = welcome.index(welcome.endIndex, offsetBy: -7)..<welcome.endIndex
//welcome.removeSubrange(range)
//// welcome now equals "hello"
//
//
//
//let greeting = "Hello, world!"
//let index = greeting.index(of: ",") ?? greeting.endIndex
//let beginning = greeting[..<index]
//// beginning is "Hello"
//
//// Convert the result to a String for long-term storage.
//let newString = String(beginning)
//
//
//let quotation = "We're a lot alike, you and I."
//let sameQuotation = "We're a lot alike, you and I."
//if quotation == sameQuotation {
//    print("These two strings are considered equal")
//}
//
//// "Voulez-vous un café?" using LATIN SMALL LETTER E WITH ACUTE
//let eAcuteQuestion = "Voulez-vous un caf\u{E9}?"
//
//// "Voulez-vous un café?" using LATIN SMALL LETTER E and COMBINING ACUTE ACCENT
//let combinedEAcuteQuestion = "Voulez-vous un caf\u{65}\u{301}?"
//
//if eAcuteQuestion == combinedEAcuteQuestion {
//    print("These two strings are considered equal")
//}
//// Prints "These two strings are considered equal"
//
//
//
//let latinCapitalLetterA: Character = "\u{41}"
//
//let cyrillicCapitalLetterA: Character = "\u{0410}"
//
//if latinCapitalLetterA != cyrillicCapitalLetterA {
//    print("These two characters are not equivalent.")
//}
//// Prints "These two characters are not equivalent."
//
//let dogString = "Dog‼🐶"
//
//for codeUnit in dogString.utf8 {
//    print("\(codeUnit) ", terminator: "")
//}
//print("")
//
//
//for scalar in dogString.unicodeScalars {
//    print("\(scalar.value) ", terminator: "")
//}
//print("")
//
//
//for scalar in dogString.unicodeScalars {
//    print("\(scalar) ")
//}
//// empty massiv
//var someInts = [Int]()
//print("someInts is of type [Int] with \(someInts.count) items.")
//// Prints "someInts is of type [Int] with 0 items."
//
//
//someInts.append(3)
//// someInts now contains 1 value of type Int
//someInts = []
//// someInts is now an empty array, but is still of type [Int]
//
//var threeDoubles = Array(repeating: 0.0, count: 3)
//// threeDoubles is of type [Double], and equals [0.0, 0.0, 0.0]
//
//var anotherThreeDoubles = Array(repeating: 2.5, count: 3)
//// anotherThreeDoubles is of type [Double], and equals [2.5, 2.5, 2.5]
//
//var sixDoubles = threeDoubles + anotherThreeDoubles
//// sixDoubles is inferred as [Double], and equals [0.0, 0.0, 0.0, 2.5, 2.5, 2.5]
//
//
//var shoppingList: [String] = ["Eggs", "Milk"]
//
//
//print("The shopping list contains \(shoppingList.count) items.")
//
//if shoppingList.isEmpty {
//    print("The shopping list is empty.")
//} else {
//    print("The shopping list is not empty.")
//}
//// Prints "The shopping list is not empty."
//shoppingList.append("Flour")
//
//shoppingList += ["Baking Powder"]
//// shoppingList now contains 4 items
//shoppingList += ["Chocolate Spread", "Cheese", "Butter"]
//// shoppingList now contains 7 items
//
//var firstItem = shoppingList[0]
//
//shoppingList[0] = "Six eggs"
//print(shoppingList)
//
//shoppingList[4...6] = ["Bananas", "Apples"]
//
//print(shoppingList.count)
//
//shoppingList.insert("Maple Syrup", at: 0)
//let mapleSyrup = shoppingList.remove(at: 0)
//
//print(shoppingList)
//
//let apples = shoppingList.removeLast()
//
//for item in shoppingList {
//    print(item)
//}

//
//var letters = Set<Character>()
//print("letters is of type Set<Character> with \(letters.count) items.")
//// Prints "letters is of type Set<Character> with 0 items."
//
//letters.insert("a")
//// letters now contains 1 value of type Character
//letters = []
//// letters is now an empty set, but is still of type Set<Character>
//
//var favoriteGenres: Set<String> = ["Rock", "Classical", "Hip hop"]
//// favoriteGenres has been initialized with three initial items
//
//print("I have \(favoriteGenres.count) favorite music genres.")
//// Prints "I have 3 favorite music genres."
//
//if favoriteGenres.isEmpty {
//    print("As far as music goes, I'm not picky.")
//} else {
//    print("I have particular music preferences.")
//}
//// Prints "I have particular music preferences."
//
//
//if let removedGenre = favoriteGenres.remove("Rock") {
//    print("\(removedGenre)? I'm over it.")
//} else {
//    print("I never much cared for that.")
//}
//// Prints "Rock? I'm over it."
//
//
//if favoriteGenres.contains("Funk") {
//    print("I get up on the good foot.")
//} else {
//    print("It's too funky in here.")
//}
//// Prints "It's too funky in here."
//
//
//for genre in favoriteGenres {
//    print("\(genre)")
//}
//
//
//for genre in favoriteGenres.sorted() {
//    print("\(genre)")
//}
//
//
//let oddDigits: Set = [1, 3, 5, 7, 9]
//let evenDigits: Set = [0, 2, 4, 6, 8]
//let singleDigitPrimeNumbers: Set = [2, 3, 5, 7]
//
//oddDigits.union(evenDigits).sorted()
//// [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
//oddDigits.intersection(evenDigits).sorted()
//// []
//oddDigits.subtracting(singleDigitPrimeNumbers).sorted()
//// [1, 9]
//oddDigits.symmetricDifference(singleDigitPrimeNumbers).sorted()
//// [1, 2, 9]
//
//let houseAnimals: Set = ["🐶", "🐱"]
//let farmAnimals: Set = ["🐮", "🐔", "🐑", "🐶", "🐱"]
//let cityAnimals: Set = ["🐦", "🐭"]
//
//houseAnimals.isSubset(of: farmAnimals)
//// true
//farmAnimals.isSuperset(of: houseAnimals)
//// true
//farmAnimals.isDisjoint(with: cityAnimals)
//// true
//
//
//var airports: [String: String] = ["YYZ": "Toronto Pearson", "DUB": "Dublin"]
//
//
//print("The airports dictionary contains \(airports.count) items.")
//
//
//
//if airports.isEmpty {
//    print("The airports dictionary is empty.")
//} else {
//    print("The airports dictionary is not empty.")
//}
//// Prints "The airports dictionary is not empty."
//airports["LHR"] = "London"
//if let removedValue = airports.removeValue(forKey: "DUB") {
//    print("The removed airport's name is \(removedValue).")
//} else {
//    print("The airports dictionary does not contain a value for DUB.")
//}
//// Prints "The removed airport's name is Dublin Airport."
//
//for (airportCode, airportName) in airports {
//    print("\(airportCode): \(airportName)")
//}
//
//for airportCode in airports.keys {
//    print("Airport code: \(airportCode)")
//}
//// Airport code: YYZ
//// Airport code: LHR
//
//for airportName in airports.values {
//    print("Airport name: \(airportName)")
//}
//// Airport name: Toronto Pearson
//// Airport name: London Heathrow
//
//
//let base = 3
//let power = 10
//var answer = 1
//for _ in 1...power {
//    answer *= base
//}
//print("\(base) to the power of \(power) is \(answer)")
//// Prints "3 to the power of 10 is 59049"

//let finalSquare = 25
//var board = [Int](repeating: 0, count: finalSquare + 1)
//
//board[03] = +08; board[06] = +11; board[09] = +09; board[10] = +02
//board[14] = -10; board[19] = -11; board[22] = -02; board[24] = -08
//
//var square = 0
//var diceRoll = 0
//while square < finalSquare {
//    // roll the dice
//    diceRoll += 1
//    if diceRoll == 7 { diceRoll = 1 }
//    // move by the rolled amount
//    square += diceRoll
//    if square < board.count {
//        // if we're still on the board, move up or down for a snake or a ladder
//        square += board[square]
//    }
//}
//print("Game over!")
//
//let finalSquare = 25
//var board = [Int](repeating: 0, count: finalSquare + 1)
//board[03] = +08; board[06] = +11; board[09] = +09; board[10] = +02
//board[14] = -10; board[19] = -11; board[22] = -02; board[24] = -08
//var square = 0
//var diceRoll = 0
//repeat {
//    // move up or down for a snake or ladder
//    square += board[square]
//    // roll the dice
//    diceRoll += 1
//    if diceRoll == 7 { diceRoll = 1 }
//    // move by the rolled amount
//    square += diceRoll
//} while square < finalSquare
//print("Game over!")
//
//
//var temperatureInFahrenheit = 87
//if temperatureInFahrenheit <= 32 {
//    print("It's very cold. Consider wearing a scarf.")
//} else if temperatureInFahrenheit >= 86 {
//    print("It's really warm. Don't forget to wear sunscreen.")
//}
//
//let someCharacter : String = "az"
//switch someCharacter {
//case "a":
//    print("The first letter of the alphabet")
//case "z":
//    print("The last letter of the alphabet")
//default:
//    print("Some other character")
//}
// Prints "The last letter of the alphabet"
//
//
//let approximateCount = 62
//let countedThings = "moons orbiting Saturn"
//let naturalCount: String
//switch approximateCount {
//case 0:
//    naturalCount = "no"
//case 1..<5:
//    naturalCount = "a few"
//case 5..<12:
//    naturalCount = "several"
//case 12..<100:
//    naturalCount = "dozens of"
//case 100..<1000:
//    naturalCount = "hundreds of"
//default:
//    naturalCount = "many"
//}
//print("There are \(naturalCount) \(countedThings).")
//// Prints "There are dozens of moons orbiting Saturn."
//
//
//
//func greet(person: String) -> String {
//    let greeting = "Hello, " + person + "!"
//    return greeting
//}
//print(greet(person: "Anna"))
//// Prints "Hello, Anna!"
//print(greet(person: "Brian"))
//// Prints "Hello, Brian!"
//
//func sayHelloWorld() -> String {
//    return "hello, world"
//}
//print(sayHelloWorld())
//// Prints "hello, world"
//
//
//func greet(person: String, alreadyGreeted: Bool) -> String {
//    if alreadyGreeted {
//        return greetAgain(person: person)
//    } else {
//        return greet(person: person)
//    }
//}
//print(greet(person: "Tim", alreadyGreeted: true))
//// Prints "Hello again, Tim!"


func greet(person: String) {
    print("Hello, \(person)!")
}
greet(person: "Dave")
// Prints "Hello, Dave!"

func printAndCount(string: String) -> Int {
    print(string)
    return string.count
}
func printWithoutCounting(string: String) {
    let _ = printAndCount(string: string)
}
printAndCount(string: "hello, world")
// prints "hello, world" and returns a value of 12
printWithoutCounting(string: "hello, world")
// prints "hello, world" but does not return a value
