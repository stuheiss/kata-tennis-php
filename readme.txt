A Tennis Kata

The tennis players Björn Borg and John McEnroe met 14 times on the regular tour and 22 times in total, with their on-court rivalry highlighted by their contrasting temperaments and styles. Borg was known for his cool and emotionless demeanor on court, while McEnroe was famed for his court-side tantrums. Their rivalry extended between 1978 and 1981, with each player winning seven times against the other. Because of their contrasting personalities, their rivalry was described as "Fire and Ice".

Rules of one game of tennis:
A single game consists of a sequence of points played with the same player serving. A game is won by the first player to have won at least four points in total and at least two points more than the opponent. The running score of each game is described in a manner peculiar to tennis: scores from zero to three points are described as "love", "fifteen", "thirty", and "forty", respectively. If at least three points have been scored by each player, making the player's scores equal at forty apiece, the score is not called out as "forty-forty", but rather as "deuce". If at least three points have been scored by each side and a player has one more point than his opponent, the score of the game is "advantage" for the player in the lead. 

Coding the game of tennis:
Design a class Tennis that properly prints the score of a given game state between Borg and McEnroe.
The Tennis class must have a method "score" that returns the current score as described above.
An earned point should be registered by the method "earn" somehow.
You may optionally create a Player class to keep track of a player's name and earned points though this is not a requirement.

Acceptance criteria:
A player must have at least 4 points and be at least 2 points in front to win.
Zero points is symbolically called "Love"
One point is symbolically called "Fifteen"
Two points is symbolically called "Thirty"
Three points is symbolically called "Forty"
Note that there are no symbolic names for more than 3 points.
A game with no points has score "Love" (not "Love-Love" or "Love-All")
A game where the first player has 0 points and the second has one point has score "Love-Fifteen"
A game where the first player has 1 point and the second has 0 points has score "Fifteen-Love"
A game where the players are tied at 2 points each has score "Thirty-All"
A game where the first player has 2 points and the second has 3 points has score "Thirty-Forty"
A game where the players are tied with at least 4 points each has score "Deuce"
A game where one player has at least 4 points and is ahead of the other player by 1 has score "Advantage <playerN>" where "<playerN>" is a placeholder for the player-who-is-ahead's name.
A game where one player has at least 4 points and is ahead of the other player by 2 has score "Winner <playerN>" where "<playerN>" is a placeholder for the player-who-is-ahead's name.

Examples (all with Borg serving):
1. The game has just begun with no points and score "Love"
2. Borg earns 2 points while McEnroe earns 3 with partial score "Thirty-Forty"
3. The game is tied at 1 point each with partial score "Fifteen-All"
4. Borg earns 3 points while McEnroe earns 4 with partial score "Advantage McEnroe"
5. Borg earns 4 points while McEnroe strikes out with final score "Winner Borg"
6. The game is tied at 10 points each with partial score "Deuce"

Getting started:
1. $ composer install
2. $ composer dumpautoload
3. write a failing test for the code you wish you had
4. write the code to make it green
5. take the opportunity to refactor
6. goto step 3
