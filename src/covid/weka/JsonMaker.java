package covid.weka;

import java.io.FileWriter;
import java.io.IOException;
import org.json.simple.JSONObject;

public class JsonMaker {

    public void makeJson(String prediction, String percentage) throws Exception {
        //Cria um objeto json com os resultados da predição
        JSONObject jsonObject = new JSONObject();
        //Coloca os valores no objeto json
        if ("0.0".equals(prediction)) { //se a predição for 0, salva o valor negativo
            prediction = "negativo";
        } else if ("1.0".equals(prediction)) { //se a predição for 1, salva o valor positivo
            prediction = "positivo";
        } else{
             System.out.println(prediction);
            throw new Exception("Predição deve ser 0 ou 1");
           
        } 
            
        jsonObject.put("Resultado", prediction);
        jsonObject.put("Certeza", percentage);

        try {
            FileWriter file = new FileWriter("C:/Users/Usuário/Desktop/php codes/output.json");
            file.write(jsonObject.toJSONString());
            file.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
        System.out.println("JSON file created: " + jsonObject);

    }
}
