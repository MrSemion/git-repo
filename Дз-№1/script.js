
function chessBoardInit(notEmpty = false/*Вернет пустую доску*/) {
    var cols = ",A,B,C,D,E,F,G,H,".split(','),
        rows = ",1,2,3,4,5,6,7,8,".split(',').reverse(),
        chessBoard = document.createElement('table'),
        curRow,
        curCell;
    
    for (var row = 0; row <= 9; row++) {
        curRow = document.createElement('tr');
        for (var cell = 0; cell <= 9; cell++) {
            curCell = document.createElement('td');
            if ((row === 0 || row === 9) || (cell === 0 || cell === 9) ) {
                //Заполняем индексы столбцов и строк
                curCell.innerText = rows[row] || cols[cell];
            } 
            else {
                /* переложил часть работы на css, чтобы меньше нагружать браузер */
                curCell.className = (row%2 == cell%2) ? 'white_cell' : 'black_cell';
            }
            curRow.appendChild(curCell);
        }
        chessBoard.appendChild(curRow);
    }
    
    return chessBoard;
}

/*******************************************************
                Выполняем алгоритм
*******************************************************/

var chessBoard = document.getElementById('chess_board'),
    chessBoardChar = document.getElementById('chess_board_char'),
    chessBoardImage = document.getElementById('chess_board_image');

chessBoard.appendChild( chessBoardInit() );