
package covid.weka;
import java.io.File;
import java.io.IOException;
import java.sql.Connection;
import java.util.logging.Level;
import java.util.logging.Logger;
import weka.classifiers.functions.MultilayerPerceptron;
import weka.core.Instance;
import weka.core.Instances;
import weka.core.converters.ArffLoader;

public class Predict {
     public String[] predict(Connection con) throws Exception {
        //Faz a predição
        CSVMaker csvMaker = new CSVMaker(); //cria um csvMaker

        String filename = System.getProperty("user.dir") + "/person";

        csvMaker.sqlToCSV(filename, con); //converte os dados do banco de dados para um arquivo .csv

        ArffMaker arffMaker = new ArffMaker(); // cria um arffMaker

        //String input = "C:/Users/Usuário/Documents/NetBeansProjects/Covid-Weka/person.csv"; //caminho do .csv
        String input = System.getProperty("user.dir") + "/person.csv";
        //String output = "C:/Users/Usuário/Documents/NetBeansProjects/Covid-Weka/person.arff"; //caminho do .arff
         String output =System.getProperty("user.dir") + "/person.arff"; //caminho do .arff

        arffMaker.csvToArff(input, output); // converte .csv para .arff

        //String arff = "C:/Users/Usuário/Downloads/weka/result.arff";
        //String modelPath = "C:/Users/Usuário/Documents/NetBeansProjects/Covid-Weka/RNA.model";// caminho do modelo
         String modelPath = System.getProperty("user.dir") +"/RNA.model";// caminho do modelo
        
        
        //Predict predict = new Predict();
        try {
            ArffLoader loader = new ArffLoader(); // cria um arff loader
            loader.setFile(new File(output)); // carrega os dados do arff criado pelo arffMaker
            Instances dataset = loader.getDataSet(); //cria um dataset com os dados carregados
            dataset.setClassIndex(dataset.numAttributes() - 1);// Define o índice da classe no conjunto de dados para ser a última coluna

            MultilayerPerceptron rnaModel = (MultilayerPerceptron) weka.core.SerializationHelper.read(modelPath); // Le o modelo

            Instance lastInstance = dataset.lastInstance();  // Obtém a última instância do conjunto de dados.

            double[] predictionDistribution = rnaModel.distributionForInstance(lastInstance);// Calcula a distribuição de previsão 

            double prediction = rnaModel.classifyInstance(lastInstance);// Classifica a instância usando o modelo e armazena a classe prevista
            String result = Double.toString(prediction); // Converte a previsão para uma string
            String percent = Double.toString(predictionDistribution[(int) prediction] * 100); // Calcula a porcentagem de confiança
            percent = percent + "%";
            System.out.println("Predicted class for the last instance: " + prediction);
            System.out.println("Percentage confidence: " + (predictionDistribution[(int) prediction] * 100) + "%");

            JsonMaker jmake = new JsonMaker(); // Cria um objeto JsonMaker

            //Chama o método makeJson para gerar um JSON com o resultado da previsão e a porcentagem de confiança
            jmake.makeJson(result, percent);

            //Retorna um array de strings contendo o resultado da previsão e a porcentagem de confiança
            return new String[]{result, percent};

        } catch (IOException ex) {
            Logger.getLogger(Predict.class.getName()).log(Level.SEVERE, null, ex);
        } catch (Exception ex) {
            Logger.getLogger(Predict.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;

    }
    
}
